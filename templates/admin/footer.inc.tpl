        </div>

        <div class="row">
          <div class="col-lg-12" style="margin-bottom:20px;">
            <div style="padding-top: 9px; margin: 40px 0 20px; border-top: 1px solid #eee;"></div>
            <div class="clearfix"></div>
            {if $site_settings.help_active == '2'}
            <div class="col-lg-2 col-lg-offset-10" id="help_button">
              <button type="button" id="demo" class="btn btn-default btn-xs"  data-demo="">
                  <span class="glyphicon glyphicon-play"></span>
                  Подсказка
              </button>
            </div>
            {/if}

          </div>
        </div>

    </div>
    <!-- Конец контента -->

    </div>

    <script type="text/javascript" src="/dist/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/dist/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/dist/metisMenu/dist/metisMenu.min.js"></script>
    {if $site_settings.help_active == '2'}
    <script type="text/javascript" src="/dist/bootstrap-tour-master/bootstrap-tour.min.js"></script>
    {/if}

    <script type="text/javascript" src="/dist/js/sb-admin-2.js"></script>

    {$javascript}

</body>

</html>