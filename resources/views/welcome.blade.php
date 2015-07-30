@extends('layouts.default')

<?php $title = 'Join us for our current sermon series <span class="no-wrap">"' . $current_series->title . '"</span>'; ?>

@section('content')

    <div class="CurrentSeries">

        <div class="CurrentSeries-buttons">
            <a class="CurrentSeries-button icon-play" href=""><span class="CurrentSeries-buttonText">Play Promo</span></a>
            <a class="CurrentSeries-button icon-twitter" href="" title="Tweet"></a>
            <a class="CurrentSeries-button icon-facebook" href="" title="Share on Facebook"></a>
        </div>

    </div>

    @introsection(['title' => $title, 'class' => '', 'image' => '', 'buttons' => [
        [
            'title' => 'Times & Directions',
            'url' => '/locations'
        ],
        [
            'title' => 'What to Expect',
            'url' => '/what-to-expect'
        ],
        [
            'title' => 'Watch Online',
            'url' => '//icampus.faithpromise.org'
        ]
    ]])
    <p class="sentence-compact"><!-- TODO: change text -->Lorm ipsum means that its really importent for you to stay off drugs and stay in scool. You need to no things that will help you in life. Like MATHS and gym. You don't want to be dum.</p>
    @endintrosection

    @cardsection(['title' => 'Upcoming Events', 'class' => 'Section--lightGrey', 'cards' => $events])
    @endcardsection

@endsection
