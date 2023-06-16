<div class="card">
    <div class="card-body mx-4">
      <div class="container">
        <p class="my-5 mx-5" style="font-size: 30px;">Dorsal</p>
    
        <table class='table table-bordered'>
                            <tr>
                                <th>Dorsal</th>
                                <th>qr</th>
                               
                            </tr>

                            @foreach ($dorsal as $dorsals)
                                <tr>
                                    <td><{{$dorsals['dorsal']}}</td>
                                    <td><x-smart-download src="/qrcodes/{{$dorsals['qr']}}" /></td>
                                    
                                </tr>

                            @endforeach

                        </table>
      </div>
    </div>
  </div>
