@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Type</h2>

    <form method="post" action="/console/skills/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="language">language:</label>
            <input type="text" name="language" id="language" value="{{old('language')}}" required>
            
            @if ($errors->first('language'))
                <br>
                <span class="w3-text-red">{{$errors->first('language')}}</span>
            @endif
        </div>
          <div class="w3-margin-bottom">
            <label for="language">expertise:</label>
            <input type="text" name="expertise" id="expertise" value="{{old('expertise')}}" required>
            
            @if ($errors->first('expertise'))
                <br>
                <span class="w3-text-red">{{$errors->first('expertise')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Skill</button>

    </form>

    <a href="/console/skills/list">Back to Type List</a>

</section>

@endsection