<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src=""></script>
    <title>Admin - Mural Digital</title>
</head>

<body>
    <div>
        @include('components.sidebar')
        
        <div class="p-4 sm:ml-64 min-h-screen flex flex-col" id="content">
          
            @include('pages.adm.user')
            @include('pages.adm.curso')
            @include('pages.adm.filial')
            @include('pages.adm.profile')
            @include('components.footer')
        </div>

        @include('components.modal-edit')
        @include('components.modal-delete')
    </div>

    <script>
        const btnUsuario = document.getElementById("btn-user");
        const btnCurso = document.getElementById("btn-curso");
        const btnFilial = document.getElementById("btn-filial");
        const btnProfile = document.getElementById("btn-profile");
        const btnDashboard = document.getElementById("btn-dashboard");
        const btnEdit = document.getElementById("btn-edit");
        const btnDelete = document.getElementById("btn-delete");
        
        const content = document.querySelector('#content');

        const contentUsuario = document.querySelector('#content-user');
        const contentCurso = document.querySelector('#content-curso');
        const contentFilial = document.querySelector('#content-filial');
        const contentProfile = document.querySelector('#content-profile');
        const contentDashboard = document.querySelector('#content-dashboard');

        contentProfile.style.display = "flex";
        contentFilial.style.visibility = "block";
        contentUsuario.style.visibility = "block";
        contentCurso.style.visibility = "block";
        contentDashboard.style.display = "none";
        contentFilial.style.display = "none";
        contentUsuario.style.display = "none";
        contentCurso.style.display = "none";
        contentProfile.style.display = "none";

        btnUsuario.onclick = function() {
            contentUsuario.style.display = "flex";
            contentCurso.style.display = "block";
            contentFilial.style.display = "block";
            contentProfile.style.display = "block";
            contentCurso.style.display = "none";
            contentFilial.style.display = "none";
            contentProfile.style.display = "none";
            contentDashboard.style.display = "none";
        };

        btnCurso.onclick = function() {
            contentCurso.style.display = "flex";
            contentUsuario.style.display = "block";
            contentFilial.style.display = "block";
            contentProfile.style.display = "block";
            contentUsuario.style.display = "none";
            contentFilial.style.display = "none";
            contentProfile.style.display = "none";
        };

        btnFilial.onclick = function() {
            contentFilial.style.display = "flex";
            contentProfile.style.display = "block";
            contentUsuario.style.display = "block";
            contentCurso.style.display = "block";
            contentProfile.style.display = "none";
            contentUsuario.style.display = "none";
            contentCurso.style.display = "none";
        };

        btnProfile.onclick = function() {
            contentProfile.style.display = "flex";
            contentFilial.style.display = "block";
            contentUsuario.style.display = "block";
            contentCurso.style.display = "block";
            contentFilial.style.display = "none";
            contentUsuario.style.display = "none";
            contentCurso.style.display = "none";
            contentDashboard.style.display = "none";
        };

        btnDashboard.onclick = function() {
            contentProfile.style.display = "block";
            contentFilial.style.display = "block";
            contentUsuario.style.display = "block";
            contentCurso.style.display = "block";
            contentDashboard.style.display = "flex";
            contentFilial.style.display = "none";
            contentUsuario.style.display = "none";
            contentCurso.style.display = "none";
            contentProfile.style.display = "none";
        };

        btnEdit.onclick = function() {
            console.log('mostrar modal de editar registro');
           // document.getElementById('modal-edit').click();
        }

        btnDelete.onclick = function() {
            console.log('mostrar modal de deletar registro');
            //document.getElementById('modal-delete').click();
        }
    </script>
<script>

document.addEventListener('click', function (e) {
    const btn = e.target.closest('.action-btn')
    if (!btn) return

    const action = btn.dataset.action
    const id = btn.dataset.id

    if (action === 'edit') {
        editId.value = id
        editFilial.value = btn.dataset.filial
        editFoto.value = btn.dataset.foto
        modalEdit.classList.remove('hidden')
    }

    if (action === 'delete') {
        deleteId.value = id
        modalDelete.classList.remove('hidden')
    }
})

const modalEdit = document.getElementById('modal-edit')
const modalDelete = document.getElementById('modal-delete')
const editId = document.getElementById('edit-id')
const editFilial = document.getElementById('edit-filial')
const editFoto = document.getElementById('edit-foto')
const deleteId = document.getElementById('delete-id')

document.querySelectorAll('.btn-close').forEach(btn =>
    btn.addEventListener('click', () => {
        modalEdit.classList.add('hidden')
        modalDelete.classList.add('hidden')
    })
)

[modalEdit, modalDelete].forEach(modal => {
    modal.addEventListener('click', e => {
        if (e.target === modal) modal.classList.add('hidden')
    })
})
</script>


<script>
/*EXEMPLO ENVIAR PARA BACKEND LARAVEL
    document.getElementById('confirm-delete').addEventListener('click', () => {
    const id = document.getElementById('delete-id').value

    fetch(`/filial/${id}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    }).then(() => location.reload())
})*/
</script>

<script>
const modalCreate = document.getElementById('modal-create')
const btnCreate = document.getElementById('btn-create')

// Abrir modal criar
btnCreate.addEventListener('click', () => {
    modalCreate.classList.remove('hidden')
})

// Fechar também fecha o modal criar
document.querySelectorAll('.btn-close').forEach(btn =>
    btn.addEventListener('click', () => {
        modalCreate.classList.add('hidden')
    })
)

// Fechar clicando fora
modalCreate.addEventListener('click', e => {
    if (e.target === modalCreate) {
        modalCreate.classList.add('hidden')
    }
})
</script>


</body>
</html>