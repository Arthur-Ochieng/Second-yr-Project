$(function(){
    var form = $("codec1")
    var servicesInput = $("#select1 option:selected")      
    var vehicleInput = $("#select2 option:selected")
    var firstNameInput = $("#first-name")
    var secondNameInput = $("#second-name")  
    var emailInput = $("#email")     
    var phoneInput = $("#phone")
    var fromInput = $("#from_loc")
    var toInput = $("to_loc")
    var textAreaInput = $("text")


    $(form).submit(function(event){
        event.preventDefault()

        var formData = $(form).serialize()

        $.ajax({
            type:'POST',
            url:$(form).attr('action'),
            data: formData
        })
        .done(function(response){
            $(servicesInput).removeClass('error')
            $(servicesInput).addClass('success')

            $(vehicleInput).removeClass('error')
            $(vehicleInput).addClass('success')

            $(firstNameInput).removeClass('error')
            $(firstNameInput).addClass('success')

            $(secondNameInput).removeClass('error')
            $(secondNameInput).addClass('success')

            $(emailInput).removeClass('error')
            $(emailInput).addClass('success')

            $(phoneInput).removeClass('error')
            $(servicesInput).addClass('success')

            $(fromInput).removeClass('error')
            $(fromInput).addClass('success')

            $(toInput).removeClass('error')
            $(toInput).addClass('success')

            $(textAreaInput).removeClass('error')
            $(textAreaInput).addClass('success')

            $(servicesInput).text(response)
            $(vehicleInput).text(response)
            $(firstNameInput).text(response)
            $(secondNameInput).text(response)
            $(emailInput).text(response)
            $(phoneInput).text(response)
            $(fromInput).text(response)
            $(toInput).text(response)
            $(textAreaInput).text(response)

            $('#select1').val('')
            $('#select2').val('')
            $('#firstName').val('')
            $('#secondName').val('')
            $('#email').val('')
            $('#phone').val('')
            $('#from_loc').val('')
            $('#textArea').val('')

        })
        .fail(function(data){
            $(servicesInput).removeClass('success')
            $(servicesInput).addClass('error')

            $(vehicleInput).removeClass('success')
            $(vehicleInput).addClass('error')

            $(firstNameInput).removeClass('success')
            $(firstNameInput).addClass('error')

            $(secondNameInput).removeClass('success')
            $(secondNameInput).addClass('error')

            $(emailInput).removeClass('success')
            $(emailInput).addClass('error')

            $(phoneInput).removeClass('esuccess')
            $(servicesInput).addClass('error')

            $(fromInput).removeClass('esuccess')
            $(fromInput).addClass('error')

            $(toInput).removeClass('success')
            $(toInput).addClass('error')

            $(textAreaInput).removeClass('success')
            $(textAreaInput).addClass('error')

            if(data.resposeText !==''){
                $(servicesInput).text(data.responseText);
            }else{
                $(servicesInput).text('Oops! An error occured and your message could not be sent')
            }
            if(data.resposeText !==''){
                $(vehicleInput).text(data.responseText);
            }else{
                $(vehicleInput).text('Oops! An error occured and your message could not be sent')
            }
            if(data.resposeText !==''){
                $(firstNameInput).text(data.responseText);
            }else{
                $(firstNameInput).text('Oops! An error occured and your message could not be sent')
            }
            if(data.resposeText !==''){
                $(secondNameInput).text(data.responseText);
            }else{
                $(secondNameInput).text('Oops! An error occured and your message could not be sent')
            }
            if(data.resposeText !==''){
                $(emailInput).text(data.responseText);
            }else{
                $(emailInput).text('Oops! An error occured and your message could not be sent')
            }
            if(data.resposeText !==''){
                $(phoneInput).text(data.responseText);
            }else{
                $(phoneInput).text('Oops! An error occured and your message could not be sent')
            }
            if(data.resposeText !==''){
                $(fromInput).text(data.responseText);
            }else{
                $(fromInput).text('Oops! An error occured and your message could not be sent')
            }
            if(data.resposeText !==''){
                $(toInput).text(data.responseText);
            }else{
                $(toInput).text('Oops! An error occured and your message could not be sent')
            }
            if(data.resposeText !==''){
                $(textAreaInput).text(data.responseText);
            }else{
                $(textAreaInput).text('Oops! An error occured and your message could not be sent')
            }
        })
    })
})