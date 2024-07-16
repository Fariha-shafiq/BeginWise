<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Speaking Skills Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        body {
            background-color: #fefefe;
            font-family: 'Comic Sans MS', 'Comic Sans', cursive;
            color: #333;
            background-image: url('https://www.transparenttextures.com/patterns/bright-squares.png');
            position: relative;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 48px;
            color: #EF923E;
            text-shadow: 2px 2px #FFCD3C;
        }
        p {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #555;
        }
        .owl-carousel .item {
            text-align: center;
            padding: 20px;
            margin-left: 2%;
            margin-right: 2%;
            border-radius: 20px;
            background: linear-gradient(135deg, #EF923E, #FFCD3C);
            color: #fff;
            height: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }
        .question {
            font-size: 24px;
            margin-bottom: 10px;
            color: #fff;
        }
        .pic {
            width: 200px;
            height: 200px;
            background-size: contain;
            margin: 0 auto;
        }
        .owl-nav {
            color: black;
        }
        .owl-nav .owl-prev, .owl-nav .owl-next {
            font-size: 36px;  
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .owl-nav .owl-prev:hover, .owl-nav .owl-next:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }
        /* Playful Animation */
        .item {
            animation: bounce 1s infinite alternate;
        }
        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-10px);
            }
        }
        .play-btn {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .play-btn:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }
        .congratulations {
            display: none;
            text-align: center;
            font-size: 36px;
            color: green;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Speaking <span style="color: black;">Skills</span></h1>
    <p>Boost Confidence and Communication Together, Master Communication, One Question at a Time!</p>
    
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="card">
                <div class="question">What is your name?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=IBgUXg3MQlTW&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('What is your name?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">What is your father's name?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=Q9IrrC9g1sRO&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('What is your father\'s name?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">What is your mother's name?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=oSU5OJ7VszaM&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('What is your mother\'s name?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">How many siblings do you have?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=emPS8AqkPO3n&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('How many siblings do you have?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">Where do you live?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=wFfu6zXx15Yk&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('Where do you live?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">What is your city name?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=4b6WRFTFxoFX&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('What is your city\'s name?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">What is your country name?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=Zoa7KPc15kRY&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('What is your country name?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">What is your religion?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=f0LmcVCZTqfE&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('What is your religion?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">What is your favorite color?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=59484&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('What is your favorite color?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">Do you know the phone number of your father or mother?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=113803&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('Do you know the phone number of your father or mother?')">🔊</button>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="question">What is your favorite food?</div>
                <div class="pic" style="background: url(https://img.icons8.com/?size=256&id=0Gi7r8YcXKVU&format=png); background-size: contain;"></div>
                <button class="play-btn" onclick="speakQuestion('What is your favorite food?')">🔊</button>
            </div>
        </div>
    </div>
    
    <div class="congratulations">Congratulations! You have prepared for the speaking test!</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            const totalSlides = $('.owl-carousel .item').length;
            let viewedSlides = new Set();

            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                items: 1,
                onTranslate: function(event) {
                    const currentIndex = event.item.index;
                    viewedSlides.add(currentIndex);
                    
                    if (viewedSlides.size === totalSlides) {
                        $('.congratulations').fadeIn();
                    }
                }
            });

            function speakQuestion(text) {
                const utterance = new SpeechSynthesisUtterance(text);
                const voices = speechSynthesis.getVoices();
                const femaleVoice = voices.find(voice => voice.name.includes('Google UK English Female')) || voices.find(voice => voice.name.includes('female'));
                
                if (femaleVoice) {
                    utterance.voice = femaleVoice;
                }
                speechSynthesis.speak(utterance);
            }

            // Ensure voices are loaded before getting them
            speechSynthesis.onvoiceschanged = () => {
                const voices = speechSynthesis.getVoices();
            };

            window.speakQuestion = speakQuestion;
        });
    </script>
</body>
</html>
