<div class="px-8 py-6 border-b"
     style="background-color: var(--bg-card); border-color: var(--border-color);">
    
    <div class="flex gap-4 items-center">

        <select id="priorityFilter"
            class="px-4 py-2 rounded border text-sm transition-colors"
            style="background-color: var(--bg-input);
                   color: var(--text-primary);
                   border-color: var(--border-input);">

            <option value="todas">Prioridad: Todas</option>
            <option value="alta">Alta</option>
            <option value="media">Media</option>
            <option value="baja">Baja</option>
        </select>

        <input type="text"
            id="searchInput"
            placeholder="Buscar tarea..."
            class="flex-1 px-4 py-2 rounded border text-sm transition-colors"
            style="background-color: var(--bg-input);
                   color: var(--text-primary);
                   border-color: var(--border-input);">

        <button id="openModal"
            class="bg-red-600 text-white px-6 py-2 rounded text-sm font-semibold hover:bg-red-700 transition-colors">
            Agregar
        </button>

    </div>
</div>
