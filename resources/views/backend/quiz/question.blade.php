@extends('backend.layouts.master')

    @section('title', 'Quiz Questions');

    @section('content')
        <div class="span9">
            <div class="content">

                @foreach($quizzes as $quiz)
                    <div class="module">
                        <div class="module-head">
                            <h3>{{ $quiz->name }}</h3>
                        </div>

                        <div class="module-body">
                            <h3 class="heading"></h3>

                            <div class="module-body table">
    {{--                            foreach--}}
                                @foreach($quiz->questions as $ques)
                                <table class="table table-message">
                                    <tbody>
                                    <tr class="read">
                                        <h4>{{ $ques->question }}</h4>
                                        <td class="cell-author hidden-phone hidden-tablet" >
                                            {{--                                    foreach--}}
                                            @foreach($ques->answers as $answer)
                                            <p>
                                                {{ $answer->answer }}

                                                @if($answer->is_correct)
                                                    <span class="badge badge-success">
                                                        Correct Answer
                                                    </span>
                                                @endif
                                            </p>
                                            @endforeach
                                            {{--                                    endforeach--}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                @endforeach
                            </div>
                        @endforeach
                            <div class="module-foot">
                                <td>
                                   <a href="{{ route('quiz.index') }}">
                                       <button class="btn btn-inverse pull-center">
                                           Back
                                       </button>
                                   </a>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
