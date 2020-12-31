@extends("frontsite.layouts.master")

@section("title")
    Home
@endsection


@section("content")
    <div style="margin: 24px 10%">
        <h3>Books</h3>
        <div id="accordion">
            @foreach($books as $book)

                <div style="margin-bottom: 16px" class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>{{$book->title}}</strong>
                            </button>
                        </h5>
                        <p class="mb-2" style="margin-left: 16px; font-size: small">
                            {{$book->date_of_publication}}
                        </p>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            {{$book->description}}
                        </div>
                        <p class="mb-0" style="margin-left: 16px; font-size: small">
                            <strong>Publisher: </strong>
                                {{$book->publisher->name}}
                        </p>
                        <p class="mb-0" style="margin-left: 16px; font-size: small">
                            <strong>Authors: </strong>
                            @foreach($book->authors as $author)
                                {{$author->name.", "}}
                            @endforeach
                        </p>
                        <p class="mb-2" style="margin-left: 16px; font-size: small">
                            <strong>Categories: </strong>
                            @foreach($book->categories as $category)
                                {{$category->name.", "}}
                            @endforeach
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4" class="li: { list-style: none; }">
                {{ $books->links() }}
            </div>
        </div>
    </div>
@endsection
