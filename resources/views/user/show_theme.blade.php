@extends('user.header_footer_light')

@section('about') active @endsection


@section('css')
    <style>
        .quiz-wrapper {
            position: relative;
            display: block;
            width: 100%;
            height: auto;

        p.question-description {
            background: #19286C;
            color: white;
            padding: 25px 20px;
        }

        ul.options {
            position: relative;
            display: inline-block;
            vertical-align: top;
            /*width: 165px;*/
            list-style: none;
            /*border: 1px solid #19286C;*/
            text-align: center;
            padding: 0;
            margin: 0;

        li {
            border: 1px solid transparent;
            padding: 6px 8px;
        }

        li:hover {
            cursor: pointer;
        }

        li.option {
            display: inline;
            position: relative;
            z-index: 50;
            /*font-size: 13px;*/
        }

        }
        .answers {
            /*display: inline-block;*/
            /*width: 335px;*/
            /*font-size: 13px;*/
            line-height: 20px;

        .target {
            display: inline-block;
            width: 110px;
            /*background: #faff00;*/
            margin: 0 3px;
            text-align: center;
        }

        }
        button[type="submit"] {
            display: block;
            position: relative;
            margin: 10px auto;
            padding: 10px;
            background: #19286C;
            border: none;
            color: white;
            font-size: 16px;
        }

        }
        .lightbox-bg {
            display: none;
            position: absolute;
            z-index: 100;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, .7);
        }

        .status {
            display: none;
            position: absolute;
            z-index: 110;
            text-align: center;
            width: 80%;
            top: 220px;
            left: 47px;

        p {
            background: white;
            padding: 30px;
        }

        }
    </style>

@endsection

@section('main')

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main_title">
                        <h2 class="mb-3">{{ $theme->name }}</h2>
                        <h3 class="mb-3 text-secondary">{{ $theme->subtitle }}</h3>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-12">
                    <iframe src="{{ asset('pdf') }}/{{ $topic->pdf }}" width="100%" height="600px"></iframe>
                </div>
                <hr>
                <div class="col-12 mt-5 text-center">
                    <h2>So'zlarni tarjimasini toping</h2>
                </div>
                <div class="col-6 quiz-wrapper">
                    <ul class="options">
                        @foreach($dicts as $dict)
                            <li class="option text-dark" data-target="answer{{ $dict->id }}">{{ $dict->uzbek }}</li>
                        @endforeach
                    </ul>
                    <table class="table answers table-bordered">
                        <thead>
                        <tr>
                            <th >English</th>
                            <th >O'zbekcha</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($dicts->shuffle() as $dict)
                                <tr>
                                    <td>{{ $dict->english }}</td>
                                    <td><span class="target" data-accept="answer{{ $dict->id }}">&nbsp;</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" value="submit" class="btn btn-primary">Tekshirish</button>
                </div>
            </div>
            <hr>
            <h2 class="text-center">Rebuslarni tarjimasini toping</h2>
            <div class="container mt-3">
                <div class="row justify-content-around">
                    @foreach($questions as $present)
                        <div class="col-lg-5 col-md-5 mb-30 col-md-6 pr single_feature p-3">
                            <div class="events_item">
                                <h4>{{ $present->question }}</h4>
                                <div class=" ">
                                    <img src="../img/question/{{ $present->photo }}" class="img-thumbnail" alt="">
                                </div>
                                <div class="">
                                    <form action="{{ route('user.rebus.check') }}" method="post">
                                        @csrf
                                        <input type="text" class="form-control mb-2 mt-2" name="answer" placeholder="Javobgiz..."
                                               required>
                                        <input type="hidden" name="rebus_id" value="{{ $present->id }}">
                                        <button style="background-color: #7a6ad8 !important;" class="btn text-white"
                                                type="submit">Tekshirish
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <hr>
            <form action="" method="post">
                @csrf
                <input type="hidden" name="quiz_count" value="{{ $block->quiz_count }}">
                <div class="container">
                    @foreach($quizzes as $id=> $quiz)
                        <div class="small_tests">
                            <section class="small_test">
                                <div>
                                    <h2 class="test_title">{{ $id+1 }}. </b> {{ $quiz->quiz }}</h2>
                                    @foreach ($quiz->answers->shuffle() as $item)
                                        <label>
                                            <input type="radio" name="answer{{ $id+1 }}" value="{{ $item->is_correct }}">
                                            <span>{{ $item->answer }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    @endforeach
                </div>
                <div class="container d-flex justify-content-center">
                    <button type="submit" id="submit" class="btn text-white rounded "
                            style="font-size: 20px;background-color: #7a6ad8 !important;">Tekshirish
                    </button>
                </div>
            </form>
        </div>
    </section>
    <!--================ End Feature Area =================-->
    <div class="modal fade" id="addPatient" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Test natijasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-check-square align-middle text-success">
                        <polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    To'gri javob: <span id="correctCount"></span> ta <br><br>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-x align-middle text-danger">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                    Noto'gri javob: <span id="incorrectCount"></span> ta
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn text-white" data-bs-dismiss="modal"
                            style="background-color: #7a6ad8 !important;">Tugatish
                    </button>
                </div>
            </div>
        </div>
    </div>

    @if(session('answer') == 1)
        <div class="modal fade" id="answerQuestion" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rabus natijasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-check-square align-middle text-success">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        Javobingiz to'g'ri <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white" data-bs-dismiss="modal"
                                style="background-color: #7a6ad8 !important;">OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if((session()->has('answer')) and (session('answer') != 1))
        <div class="modal fade" id="answerQuestion" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Test natijasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-x align-middle text-danger">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        Noto'gri javob <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white" data-bs-dismiss="modal"
                                style="background-color: #7a6ad8 !important;">OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection


@section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(window).on('load', function () {
            $('#answerQuestion').modal('show');
        });
    </script>
    <script>
        $(document).ready( function() {
            //initialize the quiz options
            var answersLeft = [];
            $('.quiz-wrapper').find('li.option').each( function(i) {
                var $this = $(this);
                var answerValue = $this.data('target');
                var $target = $('.answers .target[data-accept="'+answerValue+'"]');
                var labelText = $this.html();
                $this.draggable( {
                    revert: "invalid",
                    containment: ".quiz-wrapper"
                });

                if ( $target.length > 0 ) {
                    $target.droppable( {
                        accept: 'li.option[data-target="'+answerValue+'"]',
                        drop: function( event, ui ) {
                            $this.draggable('destroy');
                            $target.droppable('destroy');
                            $this.html('&nbsp;');
                            $target.html(labelText);
                            answersLeft.splice( answersLeft.indexOf( answerValue ), 1 );
                        }
                    });
                    answersLeft.push(answerValue);
                } else { }
            });
            $('.quiz-wrapper button[type="submit"]').click( function() {
                $('#correctCount').text({{ count($dicts) }}-answersLeft.length);
                $('#incorrectCount').text(answersLeft.length);
                $('#addPatient').modal('show');
            });
        });

    </script>
@endsection
