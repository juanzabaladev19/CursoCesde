$(function(){

    //console.log('jquery is working');
    //keyup se ejecuta cada vez que el usuario presiona una tecla
    //refrescar el navegador con ctrl+shift+R para refrescar 
    // y no tener en cuenta la memoria cache
    let edit = false; //comprobar cuando quiere editar
    $('#task-result').hide();
    fetchTasks();
    $('#search').keyup(function(){
        //Valida si el usuario
        if($('#search').val()){
            let search = $('#search').val();
            $.ajax({
                url: 'task-search.php',
                type: 'POST',
                data: {search},
                success: function(response){
                    let tasks = JSON.parse(response);
                    let template = '';
                    //console.log(task);
                    tasks.forEach(task => {
                        template += `<li>
                            ${task.name}
                        </li>`
                    });
                    $("#container").html(template);
                    $('#task-result').show();
                }
            });
        }
        //console.log(search);    
    });
    //Envío del formulario
    $('#task-form').submit(function(e){
        //con e capturo el evento que se ejecuta
        console.log('enviando');
        const postData = {
            name: $('#name').val(),
            description: $('#description').val(),
            id: $('#taskId').val()
        };
        if(edit === false){
            $.post('task-add.php',postData,function(response){
                fetchTasks();
                $('#task-form').trigger('reset');
            });
        }
        else{
            $.post('task-edit.php',postData,function(response){
                fetchTasks();
                edit = false;
                $('#task-form').trigger('reset');
            });
        }
        //console.log(postData);
        //preventDefault() evita que el formulario se envíe
        e.preventDefault();
    });
    //Cuando se presione alguno de los botones
    $(document).on('click', '.task-delete',function(){
        //obtiene el botón que se le ha hecho click
        //Obtiene el elemento padre
        if(confirm('Are you sure you want to delete it')){
            let element = $(this)[0].parentElement.parentElement;
            //Busca dentro del elemento padre el elemento con el atributo taskid
            let id = $(element).attr('taskId');
            $.post('task-delete.php',{id}, function(response){
                //Vuelvo y ejecuto la función fetchTasks
                // para actualizar la visualización
                console.log(response);
                fetchTasks();
            });
        }
    });
    //Función para editar los elementos
    $(document).on('click', '.task-item',function(){
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('taskId');
        $.post('task-single.php',{id},function(response){
            const task = JSON.parse(response);
            $('#name').val(task.name);
            $('#description').val(task.description);
            $('#taskId').val(task.id);
            edit = true;
            console.log(response);
        });
        console.log(id);
    });
    // Función Para listar los elementos
    function fetchTasks(){
        $.ajax({
            url: 'task-list.php',
            type: 'GET',
            success: function(response){
                console.log(response);
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                    <tr taskId = "${task.id}">
                        <td>${task.id}</td>
                        <td>
                            <a href="#" class="task-item">${task.name}</a>
                        </td>
                        <td>${task.description}</td>
                        <td>
                            <button class = "task-delete btn btn-danger">
                            Delete
                            </button>
                        </td>
                    </tr>
                    `
                });
                $('#tasks').html(template);
                console.log(response);
            }
        });
    }  
});