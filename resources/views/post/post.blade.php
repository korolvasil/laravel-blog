@extends('templates.app')

@section('header')
    @include('post.partials.image', [
        'url'=>asset('img/coding.jpg'),
        'alt'=>'Code'
    ])
@endsection

@section('main')
    <article class="article">
        
        <div class="author">
            <img class="author__image" src="https://avatars0.githubusercontent.com/u/16331655?v=3&s=60" alt="Vasyl Korol">
            <div class="author__details">
                <a href="#" class="author__name">Vasyl Korol</a>
                <div class="author__post-time">5 days ago</div>
            </div>
        </div>
        
        <h1 class="article__header">Lorem ipsum dolor sit amet.</h1>
        <h2 class="article__subheader">Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
        <div class="article__body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus ad aliquid aspernatur atque consequatur cum delectus dolores exercitationem facere facilis
                id illum incidunt labore laborum magni minima molestias non odit praesentium quibusdam ratione,
                saepe similique sit tenetur totam vel vero.
                Atque consequatur doloremque doloribus expedita illum optio pariatur quisquam sequi.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aut blanditiis commodi deserunt et quam, sed veniam? Adipisci aliquam amet autem consequatur
                dolore ducimus earum, eveniet illo inventore itaque iusto, maxime mollitia nam nesciunt nobis officia
                optio perspiciatis quia quidem sit tempore ullam velit vero.
                A accusamus architecto assumenda, aut consequuntur error eveniet illum nobis obcaecati officiis quis
                unde veniam voluptatum.
                Ad eligendi enim inventore maxime nostrum officiis quis repudiandae veniam.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ad aliquid, consectetur dolore dolores dolorum eos exercitationem facilis harum
                laudantium libero magni minus molestiae molestias mollitia non odit officiis
                possimus quas quis quo sequi sunt ullam.
                Doloribus minima natus tempora vero.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus ad aliquid aspernatur atque consequatur cum delectus dolores exercitationem facere facilis
                id illum incidunt labore laborum magni minima molestias non odit praesentium quibusdam ratione,
                saepe similique sit tenetur totam vel vero.
                Atque consequatur doloremque doloribus expedita illum optio pariatur quisquam sequi.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aut blanditiis commodi deserunt et quam, sed veniam? Adipisci aliquam amet autem consequatur
                dolore ducimus earum, eveniet illo inventore itaque iusto, maxime mollitia nam nesciunt nobis officia
                optio perspiciatis quia quidem sit tempore ullam velit vero.
                A accusamus architecto assumenda, aut consequuntur error eveniet illum nobis obcaecati officiis quis
                unde veniam voluptatum.
                Ad eligendi enim inventore maxime nostrum officiis quis repudiandae veniam.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ad aliquid, consectetur dolore dolores dolorum eos exercitationem facilis harum
                laudantium libero magni minus molestiae molestias mollitia non odit officiis
                possimus quas quis quo sequi sunt ullam.
                Doloribus minima natus tempora vero.
            </p>
        </div>

        <a href="#" class="tag">Coding</a>
        <a href="#" class="tag">Education</a>

    </article>

@endsection