<div id="taskModal"
     class="fixed inset-0 hidden items-center justify-center z-50"
     style="background-color: rgba(0,0,0,0.5);">

    <div class="w-[420px] rounded-2xl shadow-xl p-6 relative transition-colors"
         style="background-color: var(--bg-card);
                border: 1px solid var(--border-color);">

        <h2 id="modalTitle"
            class="text-lg font-bold mb-4"
            style="color: var(--text-primary);">
            Nueva Tarea
        </h2>

        <form id="taskForm" class="space-y-4">
            <input type="hidden" id="taskId">

            <div>
                <label class="text-sm font-medium"
                       style="color: var(--text-secondary);">
                    Título
                </label>

                <input type="text"
                       id="title"
                       class="w-full rounded px-3 py-2 text-sm"
                       style="background-color: var(--bg-input);
                              color: var(--text-primary);
                              border: 1px solid var(--border-input);">
            </div>

            <div>
                <label class="text-sm font-medium"
                       style="color: var(--text-secondary);">
                    Descripción
                </label>

                <textarea id="description"
                          rows="3"
                          class="w-full rounded px-3 py-2 text-sm resize-none"
                          style="background-color: var(--bg-input);
                                 color: var(--text-primary);
                                 border: 1px solid var(--border-input);"></textarea>
            </div>

            <div>
                <label class="text-sm font-medium"
                       style="color: var(--text-secondary);">
                    Prioridad
                </label>

                <select id="priority"
                        class="w-full rounded px-3 py-2 text-sm"
                        style="background-color: var(--bg-input);
                               color: var(--text-primary);
                               border: 1px solid var(--border-input);">
                    <option value="alta">Alta</option>
                    <option value="media">Media</option>
                    <option value="baja">Baja</option>
                </select>
            </div>

            <div>
                <label class="text-sm font-medium"
                       style="color: var(--text-secondary);">
                    Estado
                </label>

                <select id="status"
                        class="w-full rounded px-3 py-2 text-sm"
                        style="background-color: var(--bg-input);
                               color: var(--text-primary);
                               border: 1px solid var(--border-input);">

                    <option value="pendiente">Pendiente</option>
                    <option value="en_proceso">En Proceso</option>
                    <option value="revision">Revisión</option>
                    <option value="cerrado">Cerrado</option>

                </select>
            </div>

            <div class="flex justify-end gap-3 pt-4">

                <button type="button"
                        onclick="Modal.close()"
                        class="px-4 py-2 text-sm rounded"
                        style="background-color: var(--bg-button);
                               color: var(--text-primary);">
                    Cancelar
                </button>

                <button type="submit"
                        class="px-4 py-2 text-sm rounded bg-red-600 text-white hover:bg-red-700">
                    Guardar
                </button>

            </div>
        </form>
    </div>
</div>
