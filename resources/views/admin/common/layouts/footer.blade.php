<footer class="main-footer">
    <strong>Copyright &copy; 2020</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    @can('isBAC')
      <b>Type of user : Bid And Awards Commitee (BAC)</b>
    @elsecan('isTWG')
      <b>Type of user : Technical Working Group (TWG)</b>
    </div>
    @endcan
</footer>