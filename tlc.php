<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head lang="en">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TLC</title>
    
        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
            
        <!-- CSS -->
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">
        
        <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"> <!-- archivo bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <script type="text/javascript" src="js/funciones.js">
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    </head>
    
    <body>
        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
            
                <li class="logo hidden-xs">
                    <a href="index.html">Calemdario</a>
                </li>
                
                <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-notification" href=""><i class="tmn-counts">9</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications">
                                <div class="lv-header">
                                    Notification
                    
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-clear="notification">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    
                                <a class="lv-footer" href="">View Previous</a>
                            </div>
                    
                        </div>
                    </li>
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-settings" href=""></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="hidden-xs">
                                <a href=""><i class="zmdi zmdi-face"></i> Cerrar seci&oacute;n</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-settings"></i> Configuraci&oacute;n</a>
                            </li>
                        </ul>
                    </li>
                </li>
            </ul>
            
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>
        
        <section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner c-overflow">
                    <div class="profile-menu">
                        <a href="">
                            <div class="profile-pic">
                                <img src="img/profile-pics/1.jpg" alt="">
                            </div>

                            <div class="profile-info">
                                Malinda Hollaway

                                <i class="zmdi zmdi-arrow-drop-down"></i>
                            </div>
                        </a>

                        <ul class="main-menu">
                            <li>
                                <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="main-menu">
                        <li><a href=""><i class="zmdi zmdi-home"></i> Inicio</a></li>
                        <li class="sub-menu active toggled">
                        </li>
                        <li><a href=""><i class="zmdi zmdi-view-list"></i> Etapas</a></li>                    
                        <li><a href=""><i class="zmdi zmdi-collection-item"></i> Contrato</a></li>
                        <li><a href=""><i class="zmdi zmdi-face"></i> Cerrar sesi&oacute;n</a></li>
                    </ul>
                </div>
            </aside>
            
            <aside id="chat">
                <ul class="tab-nav tn-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab">Friends</a></li>
                    <li role="presentation"><a href="#online" aria-controls="online" role="tab" data-toggle="tab">Online Now</a></li>
                </ul>
            
                <div class="chat-search">
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Search People">
                    </div>
                </div>
            
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="friends">
                        <div class="listview">
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Jonathan Morris</div>
                                        <small class="lv-small">Available</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">David Belle</div>
                                        <small class="lv-small">Last seen 3 hours ago</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Fredric Mitchell Jr.</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Glenn Jecobs</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="img/profile-pics/5.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Bill Phillips</div>
                                        <small class="lv-small">Last seen 3 days ago</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="img/profile-pics/6.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Wendy Mitchell</div>
                                        <small class="lv-small">Last seen 2 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Teena Bell Ann</div>
                                        <small class="lv-small">Busy</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="online">
                        <div class="listview">
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Jonathan Morris</div>
                                        <small class="lv-small">Available</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Fredric Mitchell Jr.</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Glenn Jecobs</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Teena Bell Ann</div>
                                        <small class="lv-small">Busy</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
        
        
            <section id="content">
                
                <div class="container">
  <div class="row">
  	<p>
  		En este apartado se encuentra una peque&ntilde;a calculadora que te permitira conocer el valor total del proyecto con base a unos par&aacute;metros que se piden.  		
  	</p>
  </div>

  	<div class="row">
		  <form name="calc">
		  <div class="col-md-6">
		  	<label for="pagohora">Pago por Hora</label>
		  </div>

		  <div class="col-md-6">
			  	<input type="number" value="0" name='pagoxhora' id="pagoxhora"	class="form-control text-center"> <!-- tipos: text, number  -->
			    					<!-- values asigna un valor directamente al formulatio -->
			    					<!-- en la clase class s le hace un estilo de acuerdo a buoostrap -->
			    <br>
			    <br>
			    <br>

		</div>

		<div class="col-md-6">

			    <label for="horasdia">Hora por D&iacute;a</label>
		</div>

		<div class="col-md-6">
			    <input type="number" value="0" name='horasxdia' id="horasxdia"	class="form-control text-center" size="40"> <!-- tipos: text, number  -->
			    					<!-- values asigna un valor directamente al formulatio -->
			    					<!-- en la clase class s le hace un estilo de acuerdo a buoostrap -->
			    <br>
			    <br>
			    <br>
		</div>



		<div class="col-md-6">

		<label for="duracion">Duraci&oacute;n del proyecto (di&aacute;s h&aacute;biles)</label>

		</div>

		<div class="col-md-6">

			    <input type="number" value="0" name='duracionproyec' id="duracionproyec"	class="form-control text-center" size="40"> <!-- tipos: text, number  -->
			    					<!-- values asigna un valor directamente al formulatio -->
			    					<!-- en la clase class s le hace un estilo de acuerdo a buoostrap -->

			    <br>
			    <br>
			    <br>

		</div>

		<div class="col-md-6">
			    <label for="total">Total x 1.20</label>
		</div>


		<div class="col-md-6">
			    <input type="text" value="" placeholder="Resultado" name="resultado" 	class="form-control text-center"> <!-- placeholder colocara un texto provicional, al momento de que se escriba en la casilla, el texto desaparecera -->
			    <br>
			    <br>
			    <br>
		</div>

		<div class="col-md-6">
		</div>

		<div class="col-md-6">
			    <input type="button" value=" Costo del proyecto "  class="btn btn-success"	onclick="calcula('*')"/>
			    					<!-- crea un boton, la clase asigna el valor del color -->
			    					<!-- onclick es un evento que se accionara al momento de dar clic en el boton -->

			    <br>
			    <br>
			    <br>
		</div>

			    
		    </form>
		</div>
  </div>
            </section>
        </section>
        
        <footer id="footer">
            Copyright &copy; 2015 Material Admin
            
            <ul class="f-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Reports</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </footer>
    
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->
        
        <!-- Javascript Libraries -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="js/functions.js"></script>
        <script src="js/demo.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();

                var cId = $('#calendar'); //Change the name if you want. I'm also using thsi add button for more actions

                //Generate the Calendar
                cId.fullCalendar({
                    header: {
                        right: '',
                        center: 'prev, title, next',
                        left: ''
                    },

                    theme: true, //Do not remove this as it ruin the design
                    selectable: true,
                    selectHelper: true,
                    editable: true,

                    //Add Events
                    events: [
                        {
                            title: 'Hangout with friends',
                            start: new Date(y, m, 1),
                            allDay: true,
                            className: 'bgm-cyan'
                        },
                        {
                            title: 'Meeting with client',
                            start: new Date(y, m, 10),
                            allDay: true,
                            className: 'bgm-orange'
                        },
                        {
                            title: 'Repeat Event',
                            start: new Date(y, m, 18),
                            allDay: true,
                            className: 'bgm-amber'
                        },
                        {
                            title: 'Semester Exam',
                            start: new Date(y, m, 20),
                            allDay: true,
                            className: 'bgm-green'
                        },
                        {
                            title: 'Soccor match',
                            start: new Date(y, m, 5),
                            allDay: true,
                            className: 'bgm-lightblue'
                        },
                        {
                            title: 'Coffee time',
                            start: new Date(y, m, 21),
                            allDay: true,
                            className: 'bgm-orange'
                        },
                        {
                            title: 'Job Interview',
                            start: new Date(y, m, 5),
                            allDay: true,
                            className: 'bgm-amber'
                        },
                        {
                            title: 'IT Meeting',
                            start: new Date(y, m, 5),
                            allDay: true,
                            className: 'bgm-green'
                        },
                        {
                            title: 'Brunch at Beach',
                            start: new Date(y, m, 1),
                            allDay: true,
                            className: 'bgm-lightblue'
                        },
                        {
                            title: 'Live TV Show',
                            start: new Date(y, m, 15),
                            allDay: true,
                            className: 'bgm-cyan'
                        },
                        {
                            title: 'Software Conference',
                            start: new Date(y, m, 25),
                            allDay: true,
                            className: 'bgm-lightblue'
                        },
                        {
                            title: 'Coffee time',
                            start: new Date(y, m, 30),
                            allDay: true,
                            className: 'bgm-orange'
                        },
                        {
                            title: 'Job Interview',
                            start: new Date(y, m, 30),
                            allDay: true,
                            className: 'bgm-green'
                        },
                    ],
                     
                    //On Day Select
                    select: function(start, end, allDay) {
                        $('#addNew-event').modal('show');   
                        $('#addNew-event input:text').val('');
                        $('#getStart').val(start);
                        $('#getEnd').val(end);
                    }
                });

                //Create and ddd Action button with dropdown in Calendar header. 
                var actionMenu = '<ul class="actions actions-alt" id="fc-actions">' +
                                    '<li class="dropdown">' +
                                        '<a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>' +
                                        '<ul class="dropdown-menu dropdown-menu-right">' +
                                            '<li class="active">' +
                                                '<a data-view="month" href="">Month View</a>' +
                                            '</li>' +
                                            '<li>' +
                                                '<a data-view="basicWeek" href="">Week View</a>' +
                                            '</li>' +
                                            '<li>' +
                                                '<a data-view="agendaWeek" href="">Agenda Week View</a>' +
                                            '</li>' +
                                            '<li>' +
                                                '<a data-view="basicDay" href="">Day View</a>' +
                                            '</li>' +
                                            '<li>' +
                                                '<a data-view="agendaDay" href="">Agenda Day View</a>' +
                                            '</li>' +
                                        '</ul>' +
                                    '</div>' +
                                '</li>';


                cId.find('.fc-toolbar').append(actionMenu);
                
                //Event Tag Selector
                (function(){
                    $('body').on('click', '.event-tag > span', function(){
                        $('.event-tag > span').removeClass('selected');
                        $(this).addClass('selected');
                    });
                })();
            
                //Add new Event
                $('body').on('click', '#addEvent', function(){
                    var eventName = $('#eventName').val();
                    var tagColor = $('.event-tag > span.selected').attr('data-tag');
                        
                    if (eventName != '') {
                        //Render Event
                        $('#calendar').fullCalendar('renderEvent',{
                            title: eventName,
                            start: $('#getStart').val(),
                            end:  $('#getEnd').val(),
                            allDay: true,
                            className: tagColor
                            
                        },true ); //Stick the event
                        
                        $('#addNew-event form')[0].reset()
                        $('#addNew-event').modal('hide');
                    }
                    
                    else {
                        $('#eventName').closest('.form-group').addClass('has-error');
                    }
                });   

                //Calendar views
                $('body').on('click', '#fc-actions [data-view]', function(e){
                    e.preventDefault();
                    var dataView = $(this).attr('data-view');
                    
                    $('#fc-actions li').removeClass('active');
                    $(this).parent().addClass('active');
                    cId.fullCalendar('changeView', dataView);  
                });
            });                        
        </script>
    </body>
</html>