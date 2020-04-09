<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">MPDO</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    @can('isBAC')
      <b>Type of user : Bid And Awards Commitee (BAC)</b>
    @elsecan('isTWG')
      <b>Type of user : Technical Working Group (TWG)</b>
    </div>
    @endcan
</footer>