import { solicitarNotificar, mostrarNotificacao } from './notificar.js';
//import { CarregarPagina } from './carregarPagina.js';

window.onload = () => {
    let status_conexao = navigator.onLine;          //verificador de rede
    let localizador = window.location.pathname;     //localizador de paginas

    console.info(localizador);
    console.info("Estado da rede: "+ status_conexao);
    
    if(status_conexao == true){
        if(localizador == ''|| '/login.php' || '/cadastro.php'){
            solicitarNotificar()
        }
    }

    if(status_conexao == false){
        console.log("Offline");
        location.assign('/offline.php');
    }
    
    if(localizador == '/offline.php' && status_conexao == true){
        location.assign('/');
    }

    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
          navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
            console.log('Service Worker registrado com sucesso:', registration);
          }).catch(function(error) {
            console.log('Erro ao registrar o Service Worker:', error);
          });
        });
      }
      
}