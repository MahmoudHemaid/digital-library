@extends('dashboard.layouts.master')

@section("title")
    Add category
@endsection



@section('content')
    <div class="col-md-6">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Create new category
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form" method="POST" action="{{route("dashboard.categories.store")}}">
                @csrf
                @method("POST")
                <div class="kt-portlet__body">
                    @include('dashboard.layouts.messages')
                    <div class="form-group">
                        <label>Name</label>
                        <input value="{{old("name")}}" name="name" type="text" class="form-control" placeholder="Name">
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
