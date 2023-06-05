<table class="w-full text-center">
    <tr class="text-xl bg-indigo-500 text-white">
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Age</th>
    </tr>

    @foreach ($students as $student)
        <tr class="bg-indigo-50 hover:bg-indigo-300">
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->age}}</td>
        </tr>
    @endforeach
</table>