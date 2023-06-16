<div class="card">
  <div class="card-body">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-20-tab" data-bs-toggle="tab" data-bs-target="#nav-20" type="button" role="tab" aria-controls="nav-20" aria-selected="true">20 Years</button>
        <button class="nav-link" id="nav-30-tab" data-bs-toggle="tab" data-bs-target="#nav-30" type="button" role="tab" aria-controls="nav-30" aria-selected="false">30 Years</button>
        <button class="nav-link" id="nav-40-tab" data-bs-toggle="tab" data-bs-target="#nav-40" type="button" role="tab" aria-controls="nav-40" aria-selected="false">40 Years</button>
        <button class="nav-link" id="nav-50-tab" data-bs-toggle="tab" data-bs-target="#nav-50" type="button" role="tab" aria-controls="nav-50" aria-selected="false">50 Years</button>
        <button class="nav-link" id="nav-60-tab" data-bs-toggle="tab" data-bs-target="#nav-60" type="button" role="tab" aria-controls="nav-60" aria-selected="false">60 Years</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-20" role="tabpanel" aria-labelledby="nav-20-tab">
        @include('placement.rankingAge20')
      </div>
      <div class="tab-pane fade" id="nav-30" role="tabpanel" aria-labelledby="nav-30-tab">
        @include('placement.rankingAge30')
      </div>
      <div class="tab-pane fade" id="nav-40" role="tabpanel" aria-labelledby="nav-40-tab">
        @include('placement.rankingAge40')
      </div>
      <div class="tab-pane fade" id="nav-50" role="tabpanel" aria-labelledby="nav-40-tab">
        @include('placement.rankingAge50')
      </div>
      <div class="tab-pane fade" id="nav-60" role="tabpanel" aria-labelledby="nav-40-tab">
        @include('placement.rankingAge60')
      </div>
    </div>
  </div>
</div>
