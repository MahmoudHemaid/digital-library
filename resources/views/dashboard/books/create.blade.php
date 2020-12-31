@extends('dashboard.layouts.master')

@section("title")
    Add book
@endsection



@section('content')
    <div class="col-md-6">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Create new book
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form" method="POST" action="{{route("dashboard.books.store")}}">
                @csrf
                @method("POST")
                <div class="kt-portlet__body">
                    @include('dashboard.layouts.messages')
                    <div class="form-group">
                        <label>Title</label>
                        <input value="{{old("title")}}" name="title" type="text" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Number of copies</label>
                        <input value="{{old("number_of_copies")}}" name="number_of_copies" type="number" class="form-control" placeholder="0">
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input value="{{old("location")}}" name="location" type="text" class="form-control" placeholder="Floor 4">
                    </div>
                    <div class="form-group form-group-last">
                        <label for="exampleTextarea">Description</label>
                        <textarea name="description" class="form-control" id="exampleTextarea" rows="3">{{old("description")}}</textarea>
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="exampleSelect1">Publisher</label>
                        <select name="publisher_id" class="form-control" id="exampleSelect1">
                            <option value="null">Select</option>
                            @foreach($publishers as $publisher)
                                <option value="{{$publisher->id}}" {{old("publisher_id") === $publisher->id ? "selected" : ""}}>{{$publisher->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect2">Authors</label>
                        <select name="authors[]" multiple="multiple" class="form-control" id="exampleSelect2">
                            @foreach($authors as $author)
                                <option value="{{$author->id}}" {{is_array(old("authors")) && in_array($author->id, old("authors")) ? "selected" : ""}}>{{$author->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect2">Categories</label>
                        <select name="categories[]" multiple="multiple" class="form-control" id="exampleSelect2">
                            @foreach($categories as $category)
                                <option
                                    value="{{$category->id}}" {{is_array(old("categories")) && in_array($category->id, old("categories")) ? "selected" : ""}}
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-4 col-form-label">Date of publication</label>
                        <div class="col-8">
                            <input value="{{date('Y-m-d\TH:i', strtotime(old("date_of_publication")))}}" name="date_of_publication" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                        </div>
                    </div>

                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>
@endsection
