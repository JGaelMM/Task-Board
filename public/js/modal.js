const Modal = {

    init() {

        this.modal = document.getElementById('taskModal');
        this.form = document.getElementById('taskForm');

        document.getElementById('openModal')
            .addEventListener('click', () => this.open());

        this.form.addEventListener('submit', (e) => this.submit(e));

        this.modal.addEventListener('click', (e) => {
            if (e.target === this.modal) this.close();
        });
    },

    open(task = null) {

        this.modal.classList.remove('hidden');
        this.modal.classList.add('flex');

        if (task) {
            document.getElementById('modalTitle').innerText = 'Editar Tarea';
            document.getElementById('taskId').value = task.id;
            document.getElementById('title').value = task.title;
            document.getElementById('description').value = task.description ?? '';
            document.getElementById('priority').value = task.priority;
            document.getElementById('status').value = task.status;
        } else {
            document.getElementById('modalTitle').innerText = 'Nueva Tarea';
            this.form.reset();
            document.getElementById('taskId').value = '';
        }
    },

    close() {
        this.modal.classList.add('hidden');
        this.modal.classList.remove('flex');
    },

    async submit(e) {

        e.preventDefault();

        const id = document.getElementById('taskId').value;

        const data = {
            title: document.getElementById('title').value,
            description: document.getElementById('description').value,
            priority: document.getElementById('priority').value,
            status: document.getElementById('status').value
        };

        if (id) {
            await API.updateTask(id, data);
        } else {
            await API.createTask(data);
        }

        this.close();
        Board.load();
    }
};
