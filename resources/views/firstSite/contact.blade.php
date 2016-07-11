@extends("layouts.master")

@section('content')


    <div class="content_item">
        <div class="form_settings">
            <h2>Зворотній зв'язок:</h2>
            <p style="padding-bottom: 15px;">Якщо в вас є якісь зауваження до сайту, моеже заповнити форму із вказанням вашого питання</p>
            <p><span>Ім'я</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email :</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Текст</span><textarea class="contact textarea" rows="8" cols="50" name="your_message"></textarea></p>
            <p style="padding: 10px 0 10px 0;">Введіть результат приклад:у</p>
            <p><span> 9 + 3 = ?</span><input type="text" name="user_answer" class="contact" /><input type="hidden" name="answer" value="4d76fe9775" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Відправити" /></p>
        </div><!--close form_settings-->
    </div><!--close content_item-->


@endsection
