<?php

use Illuminate\Database\Seeder;
use App\Models\Preference;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class PreferenceHasRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preference = Preference::findOrFail(4);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(5);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(6);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(8);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(9);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(11);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(12);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(13);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(14);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(15);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(18);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(29);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(39);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(40);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(41);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(42);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(43);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(44);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(46);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(47);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(55);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(62);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(63);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(64);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(65);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(83);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(84);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(86);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(87);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(88);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(89);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(90);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(91);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(92);
        $roles      = array(1);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(1);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(2);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(56);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(57);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(58);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(59);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(60);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(61);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(79);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(80);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(81);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(82);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(95);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(96);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(97);
        $roles      = array(2);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(25);
        $roles      = array(3);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(3);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(7);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(16);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(20);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(22);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(24);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(26);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(27);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(28);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(31);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(32);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(33);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(34);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(35);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(36);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(37);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(38);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(48);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(49);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(50);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(51);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(52);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(53);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(54);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(66);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(67);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(68);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(69);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(70);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(71);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(72);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(73);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(74);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(75);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(76);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(77);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(78);
        $roles      = array(4);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(93);
        $roles      = array(5);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(94);
        $roles      = array(5);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(98);
        $roles      = array(5);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(99);
        $roles      = array(5);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(17);
        $roles      = array(5);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(19);
        $roles      = array(5);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(21);
        $roles      = array(5);
        $preference->roles()->sync($roles);
        $preference = Preference::findOrFail(85);
        $roles      = array(5);
        $preference->roles()->sync($roles);
    }
}