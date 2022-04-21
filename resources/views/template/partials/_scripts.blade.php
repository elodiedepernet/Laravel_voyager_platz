
<!-- Custom scripts for this template -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.localScroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-animate-css-rotate-scale.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/fastclick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.animate-colors-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.animate-shadow-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

<!-- Script Axios - Ajax -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    const oldnew = document.getElementbyId('oldnew-prev');

    oldnew.onclick = function(){
        axios.get('traitement.php')
        .then(function(reponseServeur){

        });
    }
</script>
<!-- manque tout le script ici --> 