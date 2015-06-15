@extends('dinghyApp')

@section('content')
<!-- Events id before "tables"-->
<div class="container" >
<div class="docs-section" id="details">
    <h6 class="docs-header">Enchanting Bride Makeover</h6>
    <p>1th of may 2015</p>
    <p>Be sure you have confirmed before bringing food and drinks.</p>
    <div class="docs-example">
        <table class="u-full-width">
            <thead>
            <tr>
                <th>Name</th>
                <th>Confirmed</th>
                <th>Food</th>
                <th>Drinks</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($items as $item)
            <tr>
                <td>Erykah Badu</td>
                <td><label class="confirmed">
                        <input type="checkbox">
                    <span class="label-body">
                  </span>
                    </label>
                </td>
                <td><input class="u-full-width" type="text" placeholder="{{$item->category}}" id="exampleEmailInput"></td>
                <td><input class="u-full-width" type="text" placeholder="{{$item->category}}" id="exampleEmailInput"></td>
            </tr>
            @endforeach

            <tr>
                <td>Erykah Badu</td>
                <td><label class="confirmed">
                        <input type="checkbox">
                    <span class="label-body">
                  </span>
                    </label>
                </td>
                <td><input class="u-full-width" type="email" placeholder="food" id="exampleEmailInput"></td>
                <td><input class="u-full-width" type="email" placeholder="drinks" id="exampleEmailInput"></td>
            </tr>
            <tr>
                <td>Mike Patton</td>
                <td><label class="confirmed">
                        <input type="checkbox">
                    <span class="label-body">
                  </span>
                    </label>
                </td>
                <td><input class="u-full-width" type="email" placeholder="food" id="exampleEmailInput"></td>
                <td><input class="u-full-width" type="email" placeholder="drinks" id="exampleEmailInput"></td>
            </tr>
            <tr>
                <td>Ben l'Oncle Soul</td>
                <td><label class="confirmed">
                        <input type="checkbox">
                    <span class="label-body">
                  </span>
                    </label>
                </td>
                <td><input class="u-full-width" type="email" placeholder="food" id="exampleEmailInput"></td>
                <td><input class="u-full-width" type="email" placeholder="drinks" id="exampleEmailInput"></td>
            </tr>
            </tbody>
        </table>
    </div>
    
        <div class="row example">
            <div class="two-thirds column">
            <input class="button-primary" type="submit" value="submit input">
                    </div>
                    </div>



</div>
</div>


@endsection