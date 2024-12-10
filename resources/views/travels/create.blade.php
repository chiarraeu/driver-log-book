<!-- resources/views/travels/create.blade.php -->

    <h2>Добави Пътуване</h2>
    <form action="{{ route('travels.store') }}" method="POST">
        @csrf
        <input type="text" name="truck_id" placeholder="ID на камиона" required>
        <input type="date" name="date" required>
        <input type="text" name="city" placeholder="Град" required>
        <input type="text" name="company" placeholder="Фирма" required>
        <input type="number" name="km" placeholder="Километри" required>
        <input type="text" name="connect_disconnect" placeholder="Свързване/Разкачване" required>
        <input type="text" name="trailer_nr" placeholder="Номер на ремаркето" required>
        <button type="submit">Запази</button>
    </form>
