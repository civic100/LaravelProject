<div class="table-responsive">
  <table class="table">
    <tr>
        <th>Dorsal</th>
        <th>Sex</th>
        <th>Time</th>
        <th>Points</th>
    </tr>
    @foreach($ranking['general'] as $runner)
        <tr>
            <td>{{$runner->dorsal}}</td>
            <td>{{$runner->sex}}</td>
            <td>{{$runner->time}}</td>
            <td>{{$runner->points}}</td>
        </tr>
    @endforeach
  </table>
</div>