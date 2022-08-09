@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Skills</h2>

    <form method="post" action="/console/skills/edit/{{$skills->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="language">language:</label>
            <input type="text" name="language" id="language" value="{{old('language', $skills->language)}}"required>
            
            @if ($errors->first('language'))
                <br>
                <span class="w3-text-red">{{$errors->first('language')}}</span>
            @endif
        </div>
          <div class="w3-margin-bottom">
            <label for="language">expertise:</label>
            <input type="text" name="expertise" id="expertise" value="{{old('expertise', $skills->expertise)}}"required>
            
            @if ($errors->first('expertise'))
                <br>
                <span class="w3-text-red">{{$errors->first('expertise')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Skill</button>

    </form>

    <a href="/console/skills/list">Back to Skills List</a>

</section>














@endsection