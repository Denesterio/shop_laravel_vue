@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-md-3">
            <left-menu-component
                :categories='{{$categories}}'
                :subcategories='{{$subcategories}}'
            ></left-menu-component>
        </aside>
        <main class="col-md-9">
            <product-list-component
                :products='{{$products}}'
                :order-products='{{$orderProducts}}'
                @isset($tags)
                :tags='{{$tags}}'
                @endisset
                @isset($authors)
                :authors='{{$authors}}'
                @endisset
            >
            </product-list-component>
        </main>
    </div>
@endsection
