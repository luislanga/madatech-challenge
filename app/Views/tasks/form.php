<form action="<?= isset($task) ? '/edit/' . esc($task['id']) : '/create' ?>" method="post" class="card p-4 shadow-sm">
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" name="title" class="form-control" id="title" 
               placeholder="Digite o título da tarefa" 
               value="<?= isset($task) ? esc($task['title']) : '' ?>" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrição</label>
        <textarea name="description" class="form-control" id="description" rows="4" 
                  placeholder="Descreva a tarefa" required><?= isset($task) ? esc($task['description']) : '' ?></textarea>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" class="form-select" id="status">
            <option value="pendente" <?= isset($task) && $task['status'] == 'pendente' ? 'selected' : '' ?>>Pendente</option>
            <option value="em andamento" <?= isset($task) && $task['status'] == 'em andamento' ? 'selected' : '' ?>>Em andamento</option>
            <option value="concluída" <?= isset($task) && $task['status'] == 'concluída' ? 'selected' : '' ?>>Concluída</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary w-100">
        <?= isset($task) ? 'Atualizar Tarefa' : 'Criar Tarefa' ?>
    </button>
</form>