@extends('layouts.app')
@section('content')
    <style>
        @media only screen and (max-width: 1026px) {
            #fadeshow1 {
                display: none;
            }
        }

        p {
            text-align: justify;
            text-justify: inter-word;
        }

        .card {
            border-radius: 20px;
        }

        #loading {
            -webkit-animation: rotation 60s infinite linear;
        }

        @-webkit-keyframes rotation {
            from {
                -webkit-transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(359deg);
            }
        }
    </style>
    <div class="container">

        <div class="pb-5">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <div class="card1">
                        <div>
                            <h1 class="mx-lg-5 mx-md-5 mx-sm-1 pb-5">
                                <div class="row">
                                    <div class="mx-auto figure-caption"> Akrofi Books</div>
                                </div>

                            </h1>
                        </div>
                        <div class="pt-4 ">
                            <div class="row mt-sm-5" id="fadeshow1">
                                <img id="loading" src="{{asset('images/bg2.jpg')}}" class="mx-auto w-75 h-50 rounded">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-1 pt-sm-5">
                    <div class="card1 mt-lg-5 mt-md-5 mt-sm-5">

                        @include('carousel')
                    </div>
                </div>
            </div>
        </div>
        <div id="profile">
            <div class="row py-3">
                <div class="mx-auto">
                    <h3> Book Profile</h3>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container lead">
                            <div class="row py-3">
                                <h3 class="mx-5"> Textbook </h3>
                            </div>
                            <p>The Key to A1 Economics Text Book has been in the system for the past seven years. Over
                                the years, it
                                has helped many students pass their WASSCE Economics Paper easily with good grades.
                                The text is structured in such a way that the notes are mixed with worked examples and
                                sample
                                questions which are all examinable. At the end of each chapter are try questions –
                                structured essay
                                type and data- response. It is interesting to note that all the data response questions
                                at the end
                                of each chapter have been answered at the back of the book.
                                Since the book is written purposely to help students pass the WASSCE Economics Paper and
                                nothing
                                else, it is devoid of extraneous material not beneficial to the students. It is
                                therefore a concise
                                text book.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="jumbotron jumbotron-fluid bg-light">
                        <div class="container lead">
                            <div class="row py-3">
                                <h3 class="mx-5"> Questions & Answers </h3>
                            </div>
                            <p>The Key to A1 Economics Questions and Answers Book has been in existence for the past
                                five years.
                                Just like the text book, it has also helped many students pass their WASSCE Economics
                                Paper easily
                                with good grades.
                                The Q&A book is structured according to topics and in a descending order. The author
                                believes that
                                some of the past questions have outlived their usefulness and therefore, students should
                                be made to
                                have a feel of the most current questions first before the very old ones. For example,
                                if you open
                                to a topic like ‘Consumer Behaviour’, you will see that the current year, say WASSCE
                                June 2016
                                questions on ‘Consumer Behaviour’ will come first after which November 2016 questions
                                will follow
                                (for both Paper 1 and 2) in that order till you get to the very first year (1993) when
                                the SSSCE
                                started. This arrangement is done for all the topics including some miscellaneous
                                topics.

                                The answers to the objective questions (Paper 1) is presented in a rectangular box
                                immediately after
                                the last objective question. The written questions (Paper 2) and their answers also
                                follow
                                immediately after the answers to the objectives, with all data - response questions and
                                answers in
                                that particular topic coming first before the structured essay type questions.

                            </p>
                        </div>
                    </div>

                </div>
                <div class="row py-3" id="Features">
                    <h3 class="mx-auto">UNIQUE FEATURES OF THE BOOKS</h3>
                </div>
                <div class="row ">
                    <div class="jumbotron jumbotron-fluid ">
                        <div class="container lead">

                            <div class="row">
                                <div class="col-lg-6 col-md-12.col-sm-12">
                                    <div class="row"><h5 class="ml-5">TEXT BOOK</h5></div>
                                    <div class="row">
                                        <ul>
                                            <li>Concise notes on all topics in the syllabus from 1st year to 2nd final
                                                year
                                            </li>
                                            <li>Likely examination questions treated as worked examples in the book</li>
                                            <li>Likely examination questions treated as worked examples in the book</li>
                                            <li>Sample examination questions and how to solve them</li>
                                            <li>Likely examination questions (Try Ques.) at the end of each
                                                topic/chapter
                                            </li>
                                            <li>Solutions to all data – response questions (Try Ques.) at the back
                                                page
                                            </li>
                                            <li>The book is devoid of extraneous material not beneficial to students
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12.col-sm-12">
                                    <div class="row"><h5 class="ml-5"> Q&A BOOK</h5></div>
                                    <div class="row">
                                        <ul>
                                            <li>All past questions and answers are topically arranged</li>
                                            <li>A descending order of arrangement i.e. the most current year first and
                                                downwards
                                            </li>
                                            <li>All answers to the objective questions come immediately after the last
                                                objective question
                                            </li>
                                            <li>Under each topic, all data – response questions come first before the
                                                structured essay type questions
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div>

            <div class=" w-100" id="author">
                <div class=" lead">
                    <div class="">
                        <div class="row ">

                            <div class="col-md-12 col-12-sm col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title">ABOUT THE AUTHOR</h5>
                                    <p class="card-text">
                                        Akrofi Benjamin is a former student of Okuapeman Secondary
                                        School and Presbyterian Training
                                        College, both at Akropong Akuapem in Ghana in the year 1994 and 1999
                                        respectively. He had
                                        his first degree at the University of Cape Coast, 2006 in B. ed Social Science
                                        (Economics
                                        Major).
                                        Since completion of the first degree, Akrofi Benjamin has obtained two masters
                                        degrees – MSc
                                        Supply Chain Management from Coventry University (2015), UK and MSc Economics
                                        from KNUST
                                        (June 2017), Ghana. He is also a member of the Chartered Institute of
                                        Procurement and Supply
                                        (MCIPS), UK. In addition, he possesses professional qualification in banking
                                        from the
                                        Chartered Institute of Bankers, Ghana as well as certificates in Securities and
                                        Investment
                                        course from the Ghana Stock Exchange. In addition, he has a certificate in
                                        credit
                                        administration from the Ghana National Banking College.
                                        Akrofi Benjamin is currently teaching Economics in Aburi Girls’ Senior High
                                        School. He is an
                                        examiner of WAEC.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <img src="{{asset('images/image1.jpeg')}}" class="card-img" alt="Author Image"
                                     width="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="grab_a_copy">
            <div class="row py-3">
                <div class="mx-auto">
                    <h3>WHERE TO GET COPIES TO BUY</h3>
                </div>
            </div>
            <div id="grab_a_copy">
                <div class="row">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container lead">
                            <div class="row py-3">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <ul>
                                        <li><strong>Kumasi:</strong> <span>Kingdom Book Shop, KNUST Campus at the commercial area.</span>
                                        </li>
                                        <li><strong>Koforidua:</strong> <span>Macmorn Books (at Legion Hall and main taxi rank near the market) & Alhaji Book Shop</span>
                                        </li>
                                        <li><strong>Cape Coast: </strong> <span>Great Provider Book Shop (Sofo Maame) around the Kotokoraba Market</span>
                                        </li>
                                        <li><strong>Takoradi: </strong> <span>CAT Book Shop and Methodist Book Shop around the Market Circle.</span>
                                        </li>
                                        <li><strong>Tamale:</strong><span>Anchor Book Shop and Student Power House Book Shop</span>
                                        </li>
                                        <li><strong>Ho: </strong><span>Azumah Book Shop</span></li>
                                        <li><strong></strong><span>Sunyani,Wa and Bolga</span></li>
                                        <li><strong>All leading book shops </strong><span></span></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <ul>
                                        <li><strong>Accra: </strong><span>Mama Book Shop, Guide Education Book Shop,
                                                Mawreck Book Shop, Erant Book Shop, Fadex Books and Services,
                                                God’s Charis Book Shop, Target Book Shop Topman Book Centre
                                                (all of Accra Central around the  Rawlings Park); Kingdom Books at
                                                Osu; Legon Book Shop operated by Kingdom Books and Stationary on
                                                Legon Campus; His Majesty Book Shop, Maxfree Book Shop,
                                                Delcam Book Shop (all at Zongo Junction, Madina); Delcam Book
                                                Shop, Adenta Barrier and Challenge Book Shop at Kokomlemle.</span>
                                        </li>
                                        <li>
                                            <p>For bulk purchase, contact the author on the following lines:
                                                <a href="tel: 0540470511"> 0540470511 (both Whatsapp andcall)</a>
                                                ,
                                                <a href="tel:  0573426911"> 0573426911 (call only)</a>
                                                ,
                                                <a href="tel:   0244173859">44173859 (call only) & 0266420723 (call
                                                    only)</a>
                                            </p>
                                            <strong>E-mail</strong> <span>
                                                <a href="mailto:   benjaminakrofi@yahoo.com">   benjaminakrofi@yahoo.com</a>
                                             </span>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="mission_vision">

            <div class=" w-100">
                <div class=" lead">
                    <div class="">
                        <div class="row ">
                            <div class="col-lg-4 col-md-12">
                                <img src="{{asset('images/vm.png')}}" class="card-img mt-5"
                                     alt="Author Image"
                                     width="100">
                            </div>
                            <div class="col-md-12 col-12-sm col-lg-8">
                                <div class="">
                                    <div class="row">
                                        <div class="pb-3">
                                            <div class="card bg-danger">
                                                <div class="card-header text-light">
                                                    VISION
                                                </div>
                                                <div class="card-body">
                                                    <p class="lead text-light">To expose students to the appropriate
                                                        learning experience (through the use of concise notes,
                                                        right examinable sample and past questions and answers) to make
                                                        students pass their WASSCE
                                                        Economics Paper with ease in Ghana and in the Sub – region as a
                                                        whole.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card bg-primary">
                                            <div class="card-header text-light">
                                                MISSION
                                            </div>
                                            <div class="card-body">
                                                <p class="lead text-light">
                                                    To demystify the subject Economics, water its concepts down – to –
                                                    earth for easy assimilation
                                                    by
                                                    students and make the subject operational for many students to like
                                                    and study it.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div>
            <hr>
            <div class=" w-100" id="contactUs">

                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <p>
                            <a class="btn w-100 lead text-success h3" data-toggle="collapse" href="#collapseExample0"
                               role="button" aria-expanded="false" aria-controls="collapseExample0">
                                Free Tutorials
                            </a>

                        </p>
                        @if($data == null)
                            <div class="row">
                                <div class="mx-auto">
                                    No Free tutorials yet
                                </div>
                            </div>
                        @else
                            <div class="collapse" id="collapseExample0">
                                <div class="card card-body">
                                    @foreach($data as $list)
                                        <p>
                                            <a class="btn btn-primary w-100" data-toggle="collapse"
                                               href="#collapseExample{{$list->id}}" role="button" aria-expanded="false"
                                               aria-controls="collapseExample->id{{$list->id}}">
                                                {{$list->name}} <span class="mx-2"></span> {{$list->description}}
                                            </a>

                                        </p>
                                        <div class="collapse" id="collapseExample{{$list->id}}">
                                            <div class="card card-body">
                                                <div class="card card-body">
                                                    <video class="w-100" height="340" controls>
                                                        <source src="{{asset('storage/'.$list->tutorial)}}">

                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif


                    </div>
                </div>
                <div class=" lead">
                    <div class="">
                        <div class="row ">
                            <div class="col-lg-4 col-md-12">
                                <img src="{{asset('images/t.png')}}" class="card-img mt-5"
                                     alt="talk to us"
                                     width="100">
                            </div>
                            <div class="col-md-12 col-12-sm col-lg-8">

                                <div class="card my-lg-5">
                                    <div class="card-header h5">Join our Online WASSCE Tutorial Class</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <h3 class="px-3"> WhatsApp Us On:</h3>
                                        </div>
                                        <div class="">
                                            <div class="jumbotron jumbotron-fluid">
                                                <div class="container lead">
                                                    <div class="row">
                                                        <div class="mx-auto">
                                                            <a href="tel:  0540470511" class="h3"> 0540470511</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="mx-2"><img src="{{asset('icons/fb.png')}}" width="30"></span>Akrofi
                    Publications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="mx-2"><img src="{{asset('icons/t.png')}}" width="30"></span>@Akrofi
                    Benjamin7</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="mx-2"><img src="{{asset('icons/i.jpg')}}" width="30"></span>@akrofi
                    Publications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">copyright@AkrofiBooks</a>
            </li>
        </ul>
    </div>

@endsection
