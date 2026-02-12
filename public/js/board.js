const Board = {

    isSyncing: false,

    priorityStyles: {
        alta: "bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-200",
        media: "bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200",
        baja: "bg-emerald-100 text-emerald-700 dark:bg-emerald-900 dark:text-emerald-200"
    },

    init() {
        this.load();
        this.initSortable();

        document.getElementById('priorityFilter')
            .addEventListener('change', () => this.load());

        document.getElementById('searchInput')
            .addEventListener('input', () => this.load());
    },

    async load() {

        const priority = document.getElementById('priorityFilter').value;
        const search = document.getElementById('searchInput').value;

        const tasks = await API.getTasks();

        document.querySelectorAll('.column')
            .forEach(col => col.innerHTML = '');

        tasks
            .filter(t => priority === 'todas' || t.priority === priority)
            .filter(t => t.title.toLowerCase().includes(search.toLowerCase()))
            .forEach(task => {

                const card = this.createCard(task);
                document.getElementById(task.status)
                    .appendChild(card);
            });

        this.updateCounters();
    },

    createCard(task) {

        const div = document.createElement('div');
        div.dataset.id = task.id;

        div.className =
            "rounded-xl p-4 shadow-sm hover:shadow border transition select-none";

        div.style.backgroundColor = 'var(--bg-card)';
        div.style.borderColor = 'var(--border-color)';

        div.innerHTML = `
            <div class="flex justify-between items-center mb-2">
                <span class="text-xs font-bold uppercase px-2 py-1 rounded ${this.priorityStyles[task.priority]}">
                    ${task.priority}
                </span>
                <button onclick="Board.delete(${task.id})"
                        class="text-xs text-red-500 hover:underline">
                    Eliminar
                </button>
            </div>

            <h3 class="font-semibold text-sm mb-1">
                ${task.title}
            </h3>

            <p class="text-xs mb-2 opacity-70">
                ${task.description ?? ''}
            </p>

            <button onclick='Modal.open(${JSON.stringify(task)})'
                    class="text-xs text-blue-500 hover:underline">
                Editar
            </button>
        `;

        return div;
    },

    async delete(id) {

        const result = await Swal.fire({
            title: '¿Eliminar tarea?',
            icon: 'warning',
            showCancelButton: true
        });

        if (!result.isConfirmed) return;

        await API.deleteTask(id);
        this.load();
    },

    updateCounters() {

        document.querySelectorAll('.column').forEach(col => {

            const count = col.children.length;
            document.getElementById('count-' + col.id)
                .innerText = count;
        });
    },

    initSortable() {

        document.querySelectorAll('.column')
            .forEach(column => {

                new Sortable(column, {

                    group: 'tasks',
                    animation: 120,
                    ghostClass: 'opacity-40',

                    onEnd: async (evt) => {

                        if (this.isSyncing) return;

                        const id = evt.item.dataset.id;
                        const newStatus = evt.to.id;

                        try {
                            this.isSyncing = true;

                            await API.updateTask(id, {
                                status: newStatus
                            });

                            this.load();

                        } finally {
                            this.isSyncing = false;
                        }
                    }
                });
            });
    }
};
