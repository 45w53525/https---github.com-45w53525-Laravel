@extends ('layout.console')

@section ('content')
<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($skills as $skill): ?>
            <tr>
                 <td>{{$skill->id}}</td>
                 <td>{{$skill->language}}</td>
                 <td>{{$skill->expertise}}</td>
                 <td><a href="/console/skills/delete/{{$skill->id}}">Delete</a></td>
                 <td><a href="/console/skills/edit/{{$skill->id}}">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/skills/add" class="w3-button w3-green">New Skills</a>

</section>








@endsection