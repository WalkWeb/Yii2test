function onInput() {
        var val = document.getElementById('input').value;
        var opts = document.getElementById('dlist').childNodes;
        for (var i = 0; i < opts.length; i++) {
            if (opts[i].value === val) {

                $.ajax({
                    url: '',
                    data: {test: opts[i].value},
                    type: 'POST',
                    success: function(data){
                        data = JSON.parse(data);

                        if (data.success === '1') {
                            document.getElementById('site').value = data.site;
                            document.getElementById('city').value = data.city;
                            document.getElementById('org').value = data.orgs;
                            document.getElementById('number').value = data.numbers;

                            document.getElementById('input').disabled = true;
                            document.getElementById('site').disabled = true;
                            document.getElementById('city').disabled = true;
                            document.getElementById('org').disabled = true;
                            document.getElementById('number').disabled = true;

                            console.log(data);
                            console.log(data.site);
                            console.log(data.city);
                            console.log(data.numbers);
                        }
                    },
                    error: function(){
                        alert('Error!');
                    }
                });

                break;
            }
        }
    }
