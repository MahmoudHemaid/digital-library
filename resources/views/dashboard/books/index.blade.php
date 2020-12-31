@extends('dashboard.layouts.master')

@section("title")
    Books
@endsection

@section("js")
    <script src="{{asset("assets/js/pages/crud/metronic-datatable/base/data-local.js")}}"
            type="text/javascript"></script>
@endsection

@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Local Data </h3>
                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Crud </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            KTDatatable </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Base </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Local Data </a>

                        <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                        <a href="#" class="btn kt-subheader__btn-primary">
                            Actions &nbsp;

                            <!--<i class="flaticon2-calendar-1"></i>-->
                        </a>
                        <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions"
                             data-placement="left">
                            <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path
                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path
                                            d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                            fill="#000000"/>
                                    </g>
                                </svg>

                                <!--<i class="flaticon2-plus"></i>-->
                            </a>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Add anything or jump to:
                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right"
                                           title="Click to learn more..."></i>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">Ticket</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Goal</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support Case</span>
                                            <span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--success">5</span>
															</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip"
                                           data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>

                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            @include('dashboard.layouts.messages')
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                        <h3 class="kt-portlet__head-title">
                            Books
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <a href="{{url()->previous()}}" class="btn btn-clean btn-icon-sm">
                                <i class="la la-long-arrow-left"></i>
                                Back
                            </a>
                            &nbsp;<a href="{{route("dashboard.books.create")}}"  class="btn btn-brand btn-icon-sm" >
                                <i class="flaticon2-plus"></i> Add New
                            </a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">

                    <!--begin: Datatable -->
                    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                         id="local_data" style="">
                        <table class="kt-datatable__table" style="display: block;">
                            <thead class="kt-datatable__head">
                            <tr class="kt-datatable__row" style="left: 0px;">
                                <th data-field="title" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 110px;">Title</span></th>
{{--                                <th data-field="description" class="kt-datatable__cell kt-datatable__cell--sort"><span--}}
{{--                                        style="width: 110px;">Description</span></th>--}}
                                <th data-field="location" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 110px;">Location</span></th>
                                <th data-field="number_of_copies"
                                    class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 60px;">copies</span></th>
                                <th data-field="date_of_publication"
                                    class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 110px;">Publication date</span></th>
                                <th data-field="publisher" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 110px;">Publisher</span></th>
                                <th data-field="authors" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 110px;">Authors</span></th>
                                <th data-field="categories" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 110px;">Categories</span></th>
                                <th data-field="Actions" data-autohide-disabled="false"
                                    class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Actions</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="kt-datatable__body" style="">
                            @foreach($books as $book)
                                <form method="POST" action="{{route('dashboard.books.destroy', $book)}}">

                                <tr data-row="{{$loop->index}}" class="kt-datatable__row" style="left: 0px;">
                                    <td data-field="title" class="kt-datatable__cell"><span
                                            style="width: 110px;">{{$book->title}}</span></td>
{{--                                    <td data-field="description" class="kt-datatable__cell"><span--}}
{{--                                            style="width: 110px;">{{$book->description}}</span></td>--}}
                                    <td data-field="location" class="kt-datatable__cell"><span
                                            style="width: 110px;">{{$book->location}}</span></td>
                                    <td data-field="number_of_copies" class="kt-datatable__cell"><span
                                            style="width: 60px;">{{$book->number_of_copies}}</span></td>
                                    <td data-field="date_of_publication" class="kt-datatable__cell"><span
                                            style="width: 110px;">{{$book->date_of_publication}}</span></td>
                                    <td data-field="publisher" class="kt-datatable__cell"><span
                                            style="width: 110px;">{{$book->publisher->name}}</span></td>
                                    <td data-field="authors" class="kt-datatable__cell"><span
                                            style="width: 110px;">
                                            @foreach($book->authors as $author)
                                                {{$author->name.", "}}
                                            @endforeach
                                        </span></td>
                                    <td data-field="categories" class="kt-datatable__cell"><span
                                            style="width: 110px;">
                                            @foreach($book->categories as $category)
                                                {{$category->name.", "}}
                                            @endforeach
                                        </span></td>
                                    <td data-field="Actions" data-autohide-disabled="false"
                                        class="kt-datatable__cell">
                                        <span style="overflow: visible; position: relative; width: 110px;">
                                            <a href="{{route("dashboard.books.edit", $book)}}" title="Edit" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                <i class="la la-edit"></i></a>
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                <i class="la la-trash"></i>
                                            </button>
                                        </span>
                                    </td>
                                </tr>
                                </form>

                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center pt-4" class="li: { list-style: none; }">
                                {{ $books->links() }}
                            </div>
                        </div>
                    </div>

                    <!--end: Datatable -->
                </div>
            </div>
        </div>

        <!-- end:: Content -->
    </div>
    <script type="javascript">

    </script>
@endsection
