@extends('layouts.main')

@section('title', 'Tes Gaya Belajar - EduSense')

@push('styles')
<style>
    .test-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem 0;
        padding-yield: 2rem;
    }
    
    .question-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: white;
    }
    
    .question-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    
    .question-text {
        font-size: 1.1rem;
        font-weight: 500;
        color: #2c3e50;
        margin-bottom: 1.5rem;
    }
    
    .form-check {
        margin-bottom: 0.75rem;
        padding: 0.75rem 1.25rem;
        border-radius: 8px;
        transition: background-color 0.2s ease;
    }
    
    .form-check:hover {
        background-color: #f8f9fa;
    }
    
    .form-check-input {
        width: 1.2em;
        height: 1.2em;
        margin-top: 0.25em;
    }
    
    .form-check-label {
        margin-left: 0.5rem;
        font-size: 1rem;
        color: #495057;
        cursor: pointer;
    }
    
    .submit-btn {
        background: linear-gradient(135deg, #2e7d32, #43a047);
        border: none;
        padding: 0.8rem 2.5rem;
        font-size: 1.1rem;
        font-weight: 500;
        border-radius: 50px;
        transition: all 0.3s ease;
        display: block;
        margin: 2rem auto 0;
        color: white;
        box-shadow: 0 4px 15px rgba(46, 125, 50, 0.3);
    }
    
    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(46, 125, 50, 0.4);
        color: white;
    }
    
    .progress-container {
        position: sticky;
        top: 0;
        background: white;
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        margin-bottom: 2rem;
    }
    
    .progress {
        height: 8px;
        border-radius: 4px;
    }
    
    .question-counter {
        text-align: center;
        color: #6c757d;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }
</style>
@endpush

@section('content')

<div class="mt-4">
<div class="test-container mt-5">
    <div class="progress-container">
        <div class="question-counter">
            Pertanyaan <span id="current-question">1</span> dari {{ count($questions) }}
        </div>
        <div class="progress">
            <div id="progress-bar" class="progress-bar bg-success" role="progressbar" style="width: 0%" 
                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    
    <form id="test-form" action="{{ route('submitTest') }}" method="POST">
        @csrf
        @foreach($questions as $index => $question)
        <div class="card question-card mb-4">
            <div class="card-body p-4">
                <h5 class="question-text">{{ $index + 1 }}. {{ $question->question_text }}</h5>
                <div class="choices-container">
                    @foreach($question->choices as $choice)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" 
                               name="answers[{{ $question->id }}]" 
                               value="{{ $choice->id }}" 
                               id="choice-{{ $question->id }}-{{ $choice->id }}"
                               data-question="{{ $index }}"
                               required>
                        <label class="form-check-label" for="choice-{{ $question->id }}-{{ $choice->id }}">
                            {{ $choice->choice_text }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
        
        <button type="submit" class="btn submit-btn">
            <i class="fas fa-paper-plane me-2"></i>Kirim Jawaban
        </button>
    </form>
</div>
</div>
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('test-form');
        const questionCards = document.querySelectorAll('.question-card');
        const currentQuestionEl = document.getElementById('current-question');
        const progressBar = document.getElementById('progress-bar');
        let currentQuestion = 0;
        
        // Hide all questions except the first one
        questionCards.forEach((card, index) => {
            if (index !== 0) {
                card.style.display = 'none';
            }
        });
        
        // Update progress bar
        function updateProgress() {
            const progress = ((currentQuestion + 1) / questionCards.length) * 100;
            progressBar.style.width = `${progress}%`;
            currentQuestionEl.textContent = currentQuestion + 1;
        }
        
        // Initialize progress
        updateProgress();
        
        // Handle radio button changes
        const radioInputs = document.querySelectorAll('input[type="radio"]');
        radioInputs.forEach(input => {
            input.addEventListener('change', function() {
                const questionIndex = parseInt(this.dataset.question);
                // Move to next question after a short delay for better UX
                setTimeout(() => {
                    if (questionIndex < questionCards.length - 1) {
                        questionCards[questionIndex].style.display = 'none';
                        questionCards[questionIndex + 1].style.display = 'block';
                        currentQuestion = questionIndex + 1;
                        updateProgress();
                        // Scroll to top of next question
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    }
                }, 300);
            });
        });
        
        // Form validation before submit
        form.addEventListener('submit', function(e) {
            const totalQuestions = {{ count($questions) }};
            const answeredQuestions = new Set();
            
            document.querySelectorAll('input[type="radio"]:checked').forEach(input => {
                answeredQuestions.add(input.name);
            });
            
            if (answeredQuestions.size < totalQuestions) {
                e.preventDefault();
                alert('Mohon jawab semua pertanyaan sebelum mengirim.');
                // Show first unanswered question
                for (let i = 0; i < questionCards.length; i++) {
                    const questionId = questionCards[i].querySelector('input[type="radio"]').name;
                    if (!answeredQuestions.has(questionId)) {
                        questionCards.forEach(card => card.style.display = 'none');
                        questionCards[i].style.display = 'block';
                        currentQuestion = i;
                        updateProgress();
                        window.scrollTo({
                            top: questionCards[i].offsetTop - 100,
                            behavior: 'smooth'
                        });
                        break;
                    }
                }
            }
        });
    });
</script>
@endpush
