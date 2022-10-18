<div class="main-content">
            <div class="content-wrapper">

                    <!--<script src="https://arquivos.eagenda.com.br/static/js/jquery-3.4.1.js?v32b"></script>-->
                    <script src="https://arquivos.eagenda.com.br/static/app-assets/vendors/js/core/jquery-3.6.0.min.js?v32b" type="text/javascript"></script>
                    <input type="hidden" name="csrfmiddlewaretoken" value="CkqFPRKa7Sg5nvOdRNmshd075Jc6cEuW3UbQtntOtw4kAEqcVTM1gMc4lXnY8geZ">
                    <script>
                      const csrftoken = document.querySelector('[name=csrfmiddlewaretoken]').value;
                    </script>
                    

                   

  <div id="wrap">
    <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-6 col-6">
          <div class="content-header">Guilherme Furchi</div>
          <p class="content-sub-header">Página de administração</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-6">
        <div class="card gradient-purple-bliss">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media"><a href="/agendamentos/listar/" class="media-body white text-left">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">0</h3>
                  <span>Agendamentos para Hoje</span>
                </div></a>
                <div class="media-right white text-right">
                  <i class="icon-pie-chart font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-6">
        <div class="card gradient-ibiza-sunset">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">1</h3>
                  <span>Agendamentos para Amanhã</span>
                </div>
                <div class="media-right white text-right">
                  <i class="icon-bulb font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>

          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-6">
        <div class="card gradient-green-tea">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left"><a href="/agendamentos/configurar/" class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">2</h3>
                  <span>Agendas</span>
                </a></div>
                <div class="media-right white text-right">
                  <i class="icon-graph font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-6">
        <div class="card gradient-pomegranate">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">R$ </h3>
                  <span>Faturamento do dia</span>
                </div>
                <div class="media-right white text-right">
                  <i class="icon-wallet font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div style="width:600px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="myChart" width="600" height="300" style="display: block;" class="chartjs-render-monitor"></canvas>
        </div>
      </div>
      <div class="col">
        <div style="width:600px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="myChart2" width="600" height="300" class="chartjs-render-monitor" style="display: block;"></canvas>
        </div>
      </div>
    </div>

    <div class="row match-height text-center">
      <div class="col-xl-13 col-lg-12 col-12">
        <div class="card text-center">
          <div class="card-header pb-2">
            <h4 class="card-title">Utilização - <a href="/users/planos/">Plano Teste</a></h4>
            
          </div>
          <div class="row justify-content-center align-items-center">
            <div class="col-xl-3 col-lg-3 col-md-3 col-6">
              <div class="card gradient-blackberry">
                <div class="card-content">
                  <div class="card-body pt-2 pb-0">
                    <div class="media">
                      <div class="media-body white text-left">
                        <h3 class="font-large-1 mb-0">9 de 100</h3>
                        <span>Agendamentos</span>
                      </div>
                      <div class="media-right white text-right">
                        <i class="icon-pie-chart font-large-1"></i>
                      </div>
                    </div>
                  </div>
                  <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-6">
              <div class="card gradient-blackberry">
                <div class="card-content">
                  <div class="card-body pt-2 pb-0">
                    <div class="media"><a href="/users/adm_equipe/" class="media-body white text-left">
                      <div class="media-body white text-left">
                        <h3 class="font-large-1 mb-0">2 de 2</h3>
                        <span>Usuários</span>
                      </div></a>
                      <div class="media-right white text-right">
                        <i class="icon-users font-large-1"></i>
                      </div>
                    </div>
                  </div>
                  <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-6">
              <div class="card gradient-blackberry">
                <div class="card-content">
                  <div class="card-body pt-2 pb-0">
                    <div class="media"><a href="/users/unidades_atendimento/" class="media-body white text-left">
                      <div class="media-body white text-left">
                        <h3 class="font-large-1 mb-0">0 de 2</h3>
                        <span>Unidades de Atendimento</span>
                      </div></a>
                      <div class="media-right white text-right">
                        <i class="icon-home font-large-1"></i>
                      </div>
                    </div>
                  </div>
                  <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-6">
              <div class="card gradient-blackberry">
                <div class="card-content">
                  <div class="card-body pt-2 pb-0">
                    <div class="media"><a href="/users/organizacao/contas" class="media-body white text-left">
                      <div class="media-body white text-left">
                        <h3 class="font-large-1 mb-0">0 de 1</h3>
                        <span>Contas</span>
                      </div></a>
                      <div class="media-right white text-right">
                        <i class="icon-notebook font-large-1"></i>
                      </div>
                    </div>
                  </div>
                  <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row match-height">
      <div class="col-xl-13 col-lg-12 col-12">
        <div class="card">
          <div class="card-header pb-2">
            <h4 class="card-title">Minhas Agendas de Atendimento <a class="btn white btn-round btn-primary" style="float: right;" href="/painel/controle">Painel Configuração</a></h4>


          </div>
          <div class="card-content">
            <input type="text" id="myInput" onkeyup="buscar_agendas()" placeholder="Buscar agendas pelo nome.." class="form-control col-lg-3 col-sm-6">
            <table class="table table-sm table-responsive-sm text-center" style="font-size:90%;" id="tabela_agendas">
              <thead>
                <tr>
                  <th>Agenda</th>
                  
                  <!--<th>Serviços</th>-->
                  <th>Agendamentos Hoje</th>
                  <th>Agendamentos Amanhã</th>
                  <th>Agendamentos Próx 7 dias</th>
                  <th>Taxa de Ocupação Prox 7 dias</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td><a href="/agendamentos/calendar/2226/">Cópia da Nutricionista Valéria Furchi</a></td>
                  <!--<td></td>-->
                  
                  <td><a href="/agendamentos/listar/?agenda=2226">0</a></td>
                  <td>0</td>
                  <td>0</td>
                  
                  <td><a class="btn white btn-round btn-primary">0,0%</a></td>
                  
                  
                  
                    
                    <td><a class="btn white btn-round btn-primary">Ativo</a></td>
                    
                  
                  <td><a class="success p-0" data-original-title="" title="" target="_blank" href="/agendamentos/configurar_agenda/2226"><span data-toggle="tooltip" data-placement="right" title="Configurar Agenda"><i class="ft-edit font-medium-3 mr-2"></i></span></a></td>
                </tr>
                
                <tr>
                  <td><a href="/agendamentos/calendar/2176/">Nutricionista Valéria Furchi</a></td>
                  <!--<td></td>-->
                  
                  <td><a href="/agendamentos/listar/?agenda=2176">0</a></td>
                  <td>1</td>
                  <td>2</td>
                  
                  <td><a class="btn white btn-round btn-primary">4,4%</a></td>
                  
                  
                  
                    
                    <td><a class="btn white btn-round btn-primary">Ativo</a></td>
                    
                  
                  <td><a class="success p-0" data-original-title="" title="" target="_blank" href="/agendamentos/configurar_agenda/2176"><span data-toggle="tooltip" data-placement="right" title="Configurar Agenda"><i class="ft-edit font-medium-3 mr-2"></i></span></a></td>
                </tr>
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://arquivos.eagenda.com.br/static/js/Chart.min.js?v32b"></script>

  <script type="text/javascript">
     var number_appointment = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9];
     var number_appointment_attended = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
     var graph_label = ["10/2021", "11/2021", "12/2021", "1/2022", "2/2022", "3/2022", "4/2022", "5/2022", "6/2022", "7/2022", "8/2022", "9/2022", "10/2022"];
  </script>


  <script>
    var number_appointment;
    var number_appointment_attended;
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            //labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            labels: graph_label,
            datasets: [{
                label: 'Agendamentos',
                data: number_appointment,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    //'rgba(54, 162, 235, 0.2)',
                    //'rgba(255, 206, 86, 0.2)',
                    //'rgba(75, 192, 192, 0.2)',
                    //'rgba(153, 102, 255, 0.2)',
                    //'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            //labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            labels: graph_label,
            datasets: [{
                label: 'Atendidos',
                data: number_appointment_attended,
                backgroundColor: [
                    'rgba(0, 0, 0, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    //'rgba(54, 162, 235, 0.2)',
                    //'rgba(255, 206, 86, 0.2)',
                    //'rgba(75, 192, 192, 0.2)',
                    //'rgba(153, 102, 255, 0.2)',
                    //'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 0.2)',
                    //'rgba(54, 162, 235, 1)',
                    //'rgba(255, 206, 86, 1)',
                    //'rgba(75, 192, 192, 1)',
                    //'rgba(153, 102, 255, 1)',
                    //'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
  </script>

<script>
function buscar_agendas() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabela_agendas");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

  

<input type="hidden" name="csrfmiddlewaretoken" value="CkqFPRKa7Sg5nvOdRNmshd075Jc6cEuW3UbQtntOtw4kAEqcVTM1gMc4lXnY8geZ">

    <div id="token" hidden="True">Error retrieving Instance ID token. </div>
    <div id="messages" hidden="True"></div>
    <div id="notis" hidden="True"></div>
    <div id="err" hidden="True"></div>

    
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>

   
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-messaging.js"></script>

    <script>
      // Your web app's Firebase configuration
      var firebaseConfig = {
        apiKey: "AIzaSyBe63sRNHoaE_ul7UCVvS9XlAfEYN8Khvw",
        authDomain: "minhaagenda-bb1e4.firebaseapp.com",
        databaseURL: "https://minhaagenda-bb1e4.firebaseio.com",
        projectId: "minhaagenda-bb1e4",
        storageBucket: "minhaagenda-bb1e4.appspot.com",
        messagingSenderId: "558923959665",
        appId: "1:558923959665:web:d6506a57b4f70881cbbad0",
        measurementId: "G-18H7MGFFD7"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
    </script>

<script>
  function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie !== '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            // Does this cookie string begin with the name we want?
            if (cookie.substring(0, name.length + 1) === (name + '=')) {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
  }
  // [START get_messaging_object]
  // Retrieve Firebase Messaging object.
  const messaging = firebase.messaging();
  
  // [END get_messaging_object]
  // [START set_public_vapid_key]
  // Add the public key generated from the console here.
  messaging.usePublicVapidKey('BFObL7L7oNRYcsC7wsC4xooomNscrZ9LCypVYHmcEun849CmL5XpVMW7eRNYgwm8Q6LBekzPj8iVCYeQJwEjvsg');
  // [END set_public_vapid_key]

  // IDs of divs that display Instance ID token UI or request permission UI.
  const tokenDivId = 'token_div';
  const permissionDivId = 'permission_div';

  // [START refresh_token]
  // Callback fired if Instance ID token is updated.
  messaging.onTokenRefresh(() => {
    messaging.getToken().then((refreshedToken) => {
      console.log('Token refreshed.');
      // Indicate that the new Instance ID token has not yet been sent to the
      // app server.
      setTokenSentToServer(false);
      // Send Instance ID token to app server.
      sendTokenToServer(refreshedToken);
      // [START_EXCLUDE]
      // Display new Instance ID token and clear UI of all previous messages.
      resetUI();
      // [END_EXCLUDE]
    }).catch((err) => {
      console.log('Unable to retrieve refreshed token ', err);
      showToken('Unable to retrieve refreshed token ', err);
    });
  });
  // [END refresh_token]

  // [START receive_message]
  // Handle incoming messages. Called when:
  // - a message is received while the app has focus
  // - the user clicks on an app notification created by a service worker
  //   `messaging.setBackgroundMessageHandler` handler.
  messaging.onMessage((payload) => {
    console.log('Message received. ', payload);
    // [START_EXCLUDE]
    // Update the UI to include the received message.
    appendMessage(payload);
    // [END_EXCLUDE]
  });
  // [END receive_message]

  function resetUI() {
    clearMessages();
    showToken('loading...');
    // [START get_token]
    // Get Instance ID token. Initially this makes a network call, once retrieved
    // subsequent calls to getToken will return from cache.

    console.log("getting token")
    messaging.getToken().then((resp) => {
      console.log(resp)
    })
    messaging.getToken()
    .then(function(currentToken) {
      console.log("Got current token")
      if (currentToken) {
        sendTokenToServer(currentToken);
        updateUIForPushEnabled(currentToken);
      } else {
        // Show permission request.
        console.log('No Instance ID token available. Request permission to generate one.');
        // Show permission UI.
        updateUIForPushPermissionRequired();
        setTokenSentToServer(false);
      }
    })
    .catch(function(err) {
      console.log('An error occurred while retrieving token. ');
      showToken('Error retrieving Instance ID token. ', err);
      setTokenSentToServer(false);
    });
    console.log("End get token")

  }
    // [END get_token]


  function showToken(currentToken) {
    // Show token in console and UI.
    const tokenElement = document.querySelector('#token');
    tokenElement.textContent = currentToken;
  }

  // Send the Instance ID token your application server, so that it can:
  // - send messages back to this app
  // - subscribe/unsubscribe the token from topics
  function sendTokenToServer(currentToken) {
    if (!isTokenSentToServer()) {
      console.log('Sending token to server...');
      // TODO(developer): Send the current token to your server.
      fetch('/agendamentos/api/device/gcm/', {
        method: "POST",
        headers: {
            "X-CSRFToken": csrftoken,
            "Accept": "application/json",
            "Content-Type": "application/json"
          },
        body: JSON.stringify({
          'registration_id': currentToken,
          'cloud_message_type': 'FCM'
        }),
        credentials: "same-origin",
      }).then(function(response) {
        console.log(response);
      })
      setTokenSentToServer(true);
    } else {
      console.log('Token already sent to server so won\'t send it again ' +
          'unless it changes');
    }

  }

  function isTokenSentToServer() {
    return window.localStorage.getItem('sentToServer') === '1';
  }

  function setTokenSentToServer(sent) {
    window.localStorage.setItem('sentToServer', sent ? '1' : '0');
  }

  function showHideDiv(divId, show) {
    const div = document.querySelector('#' + divId);
    if (show) {
      div.style = 'display: visible';
    } else {
      div.style = 'display: none';
    }
  }

  function requestPermission() {
    console.log('Requesting permission...');
    // [START request_permission]
    Notification.requestPermission().then((permission) => {
      if (permission === 'granted') {
        console.log('Notification permission granted.');
        // TODO(developer): Retrieve an Instance ID token for use with FCM.
        // [START_EXCLUDE]
        // In many cases once an app has been granted notification permission,
        // it should update its UI reflecting this.
        resetUI();
        // [END_EXCLUDE]
      } else {
        console.log('Unable to get permission to notify.');
      }
    });
    // [END request_permission]
  }

  function deleteToken() {
    // Delete Instance ID token.
    // [START delete_token]
    messaging.getToken().then((currentToken) => {
      messaging.deleteToken(currentToken).then(() => {
        console.log('Token deleted.');
        setTokenSentToServer(false);
        // [START_EXCLUDE]
        // Once token is deleted update UI.
        resetUI();
        // [END_EXCLUDE]
      }).catch((err) => {
        console.log('Unable to delete token. ', err);
      });
      // [END delete_token]
    }).catch((err) => {
      console.log('Error retrieving Instance ID token. ', err);
      showToken('Error retrieving Instance ID token. ', err);
    });

  }

  // Add a message to the messages element.
  function appendMessage(payload) {
    const messagesElement = document.querySelector('#messages');
    const dataHeaderELement = document.createElement('h5');
    const dataElement = document.createElement('pre');
    dataElement.style = 'overflow-x:hidden;';
    dataHeaderELement.textContent = 'Received message:';
    dataElement.textContent = JSON.stringify(payload, null, 2);
    messagesElement.appendChild(dataHeaderELement);
    messagesElement.appendChild(dataElement);
  }

  // Clear the messages element of all children.
  function clearMessages() {
    const messagesElement = document.querySelector('#messages');
    while (messagesElement.hasChildNodes()) {
      messagesElement.removeChild(messagesElement.lastChild);
    }
  }

  function updateUIForPushEnabled(currentToken) {
    showHideDiv(tokenDivId, true);
    showHideDiv(permissionDivId, false);
    showToken(currentToken);
  }

  function updateUIForPushPermissionRequired() {
    showHideDiv(tokenDivId, false);
    showHideDiv(permissionDivId, true);
  }

  resetUI();
</script>
  



            </div>
          </div>