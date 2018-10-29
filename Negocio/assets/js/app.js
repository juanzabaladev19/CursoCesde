/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    fetchTasks();
    $('#registro-form').submit(function(e){
        //con e capturo el evento que se ejecuta
        console.log('enviando');
        const postData = {
            nombre: $('#nombre').val(),
            apellido: $('#apellido').val()
        };
        $.post('http://localhost/CursoCesde/Negocio/Registro/InsertUser',postData,function(response){
            fetchTasks();
            $('#registro-form').trigger('reset');
        });
        //console.log(postData);
        //preventDefault() evita que el formulario se envíe
        e.preventDefault();
    });
    function fetchTasks(){
        //console.log("hola");
        
        $.ajax({
            url: 'http://localhost/CursoCesde/Negocio/Registro/GetUser',
            type: 'GET',
            success: function(response){
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task =>{
                    template += `
                    <tr>
                        <td>${task.id}</td>
                        <td>${task.nombre}</td>
                        <td>${task.apellido}</td>
                    </tr>`
                });
                $('#tasks').html(template);
            }
        });
    }
});


