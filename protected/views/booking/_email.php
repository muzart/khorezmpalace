<?php /* @var $booking Booking*/?>
<table>
    <tr>
        <td>Name</td>
        <td><?=$booking->your_name?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?=$booking->email?></td>
    </tr>
    <tr>
        <td>Room type</td>
        <td><?=$booking->room_type?></td>
    </tr>
    <tr>
        <td>Rooms</td>
        <td><?=$booking->rooms?></td>
    </tr>
    <tr>
        <td>Adults</td>
        <td><?=$booking->adults?></td>
    </tr>
    <tr>
        <td>Childs</td>
        <td><?=$booking->childs?></td>
    </tr>
    <tr>
        <td>Check_in</td>
        <td><?=$booking->check_in.' '.$booking->check_in_time?></td>
    </tr>
    <tr>
        <td>Check_out</td>
        <td><?=$booking->check_out.' '.$booking->check_out_time?></td>
    </tr>
    <tr>
        <td>Time</td>
        <td><?=date('d.m.Y',$booking->created) ?></td>
    </tr>
</table>
