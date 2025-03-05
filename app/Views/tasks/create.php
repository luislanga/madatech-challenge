<form action="/create" method='post'>
    <div>
        <label for="title">Título</label>
        <input type="text" name="title">
        <label for="description">Descrição</label>
        <textarea name="description"></textarea>
        <label for="status">Status</label>
        <select name="status">
            <option value="pendente">Pendente</option>
            <option value="em andamento">Em andamento</option>
            <option value="concluída">Concluída</option>
        </select>
        <input type="submit" value="Criar">
    </div>
</form>