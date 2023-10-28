<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Brand;
use App\Models\Customer;
use App\Models\Delivery;
use App\Models\Image;
use App\Models\Order;
use App\Models\Phone;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Price;
use App\Models\Stock;
use App\Models\Version;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        \App\Models\Brand::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        // \App\Models\Version::factory(20)->create();

        Country::factory()->create(['name'=>'Mexico']);
        Country::factory()->create(['name'=>'United States of America']);
        Country::factory()->create(['name'=>'Canada']);

        Delivery::factory()->create(['status'=>'En espera']);
        Delivery::factory()->create(['status'=>'Enviado']);
        Delivery::factory()->create(['status'=>'Entregado']);

        $states = [
            'Aguascalientes',
            'Baja California',
            'Baja California Sur',
            'Campeche',
            'Chiapas',
            'Chihuahua',
            'Ciudad de México (Distrito Federal)',
            'Coahuila',
            'Colima',
            'Durango',
            'Estado de México',
            'Guanajuato',
            'Guerrero',
            'Hidalgo',
            'Jalisco',
            'Michoacán',
            'Morelos',
            'Nayarit',
            'Nuevo León',
            'Oaxaca',
            'Puebla',
            'Querétaro',
            'Quintana Roo',
            'San Luis Potosí',
            'Sinaloa',
            'Sonora',
            'Tabasco',
            'Tamaulipas',
            'Tlaxcala',
            'Veracruz',
            'Yucatán',
            'Zacatecas',
        ];
        
        foreach ($states as $stateName) {
            State::factory()->create(['name' => $stateName]);
        }

        $citiesAgs = [
            'Aguascalientes', // The capital city
            'Asientos',
            'Calvillo',
            'Cosío',
            'El Llano',
            'Jesús María',
            'Pabellón de Arteaga',
            'Rincón de Romos',
            'San Francisco de los Romo',
            // You can add more cities here
        ];

        $citiesBc = [
            'Mexicali', // The capital city
            'Tijuana',
            'Ensenada',
            'Rosarito Beach',
            'Tecate',
            // Add more cities here
        ];
        
        $citiesBcs = [
            'La Paz', // The capital city
            'San José del Cabo',
            'Cabo San Lucas',
            'Comondú',
            'Loreto',
            // Add more cities here
        ];
        
        $citiesCamp = [
            'Campeche', // The capital city
            'Ciudad del Carmen',
            'Champotón',
            'Escárcega',
            'Calkiní',
            // Add more cities here
        ];
        
        $citiesChis = [
            'Tuxtla Gutiérrez', // The capital city
            'San Cristóbal de las Casas',
            'Tapachula',
            'Palenque',
            'Comitán de Domínguez',
            // Add more cities here
        ];
        
        $citiesChih = [
            'Chihuahua', // The capital city
            'Juárez',
            'Cuauhtémoc',
            'Delicias',
            'Parral',
            // Add more cities here
        ];
        
        $citiesCDMX = [
            'Ciudad de México', // The capital city
            'Iztapalapa',
            'Gustavo A. Madero',
            'Ecatepec',
            'Nezahualcóyotl',
            // Add more cities here
        ];
        
        $citiesCoah = [
            'Saltillo', // The capital city
            'Torreón',
            'Monclova',
            'Piedras Negras',
            'Acuña',
            // Add more cities here
        ];
        
        $citiesCol = [
            'Colima', // The capital city
            'Manzanillo',
            'Tecomán',
            'Villa de Álvarez',
            // Add more cities here
        ];
        
        $citiesDgo = [
            'Durango', // The capital city
            'Gómez Palacio',
            'Lerdo',
            'Victoria de Durango',
            // Add more cities here
        ];
        
        $citiesEdomex = [
            'Toluca', // The capital city
            'Ecatepec',
            'Nezahualcóyotl',
            'Naucalpan',
            'Tlalnepantla',
            // Add more cities here
        ];
        
        $citiesGto = [
            'Guanajuato', // The capital city
            'León',
            'Irapuato',
            'Celaya',
            'Salamanca',
            // Add more cities here
        ];
        
        $citiesGro = [
            'Chilpancingo', // The capital city
            'Acapulco',
            'Iguala',
            'Taxco',
            'Zihuatanejo',
            // Add more cities here
        ];
        
        $citiesHgo = [
            'Pachuca', // The capital city
            'Tulancingo',
            'Tizayuca',
            'Ixmiquilpan',
            'Huejutla',
            // Add more cities here
        ];
        
        $citiesJal = [
            'Guadalajara', // The capital city
            'Zapopan',
            'Tlaquepaque',
            'Tonala',
            'Puerto Vallarta',
            // Add more cities here
        ];
        
        $citiesMich = [
            'Morelia', // The capital city
            'Uruapan',
            'Zamora',
            'Lázaro Cárdenas',
            'Pátzcuaro',
            // Add more cities here
        ];
        
        $citiesMor = [
            'Cuernavaca', // The capital city
            'Cuautla',
            'Jiutepec',
            'Temixco',
            'Yautepec',
            // Add more cities here
        ];
        
        $citiesNay = [
            'Tepic', // The capital city
            'Tecuala',
            'Santiago Ixcuintla',
            'Compostela',
            'Acaponeta',
            // Add more cities here
        ];
        
        $citiesNL = [
            'Monterrey', // The capital city
            'San Nicolás de los Garza',
            'Guadalupe',
            'Apodaca',
            'Escobedo',
            // Add more cities here
        ];
        
        $citiesOax = [
            'Oaxaca', // The capital city
            'Salina Cruz',
            'Juchitán de Zaragoza',
            'Tehuantepec',
            'Huajuapan de León',
            // Add more cities here
        ];
        
        $citiesPue = [
            'Puebla', // The capital city
            'Tehuacán',
            'Cholula',
            'Atlixco',
            'Izúcar de Matamoros',
            // Add more cities here
        ];
        
        $citiesQro = [
            'Querétaro', // The capital city
            'San Juan del Río',
            'Corregidora',
            'El Marqués',
            'Huimilpan',
            // Add more cities here
        ];
        
        $citiesQR = [
            'Cancún', // A popular tourist destination
            'Playa del Carmen',
            'Chetumal',
            'Cozumel',
            'Isla Mujeres',
            // Add more cities here
        ];
        
        $citiesSLP = [
            'San Luis Potosí', // The capital city
            'Soledad de Graciano Sánchez',
            'Matehuala',
            'Rioverde',
            'Ciudad Valles',
            // Add more cities here
        ];
        
        $citiesSin = [
            'Culiacán', // The capital city
            'Mazatlán',
            'Los Mochis',
            'Guasave',
            'Navolato',
            // Add more cities here
        ];
        
        $citiesSon = [
            'Hermosillo', // The capital city
            'Ciudad Obregón',
            'Nogales',
            'San Luis Río Colorado',
            'Guaymas',
            'Cajeme',
            // Add more cities here
        ];
        
        $citiesTab = [
            'Villahermosa', // The capital city
            'Cárdenas',
            'Comalcalco',
            'Huimanguillo',
            'Tenosique',
            // Add more cities here
        ];
        
        $citiesTam = [
            'Ciudad Victoria', // The capital city
            'Tampico',
            'Reynosa',
            'Matamoros',
            'Nueva Ciudad Guerrero',
            'Madero',
            // Add more cities here
        ];
        
        $citiesTlax = [
            'Tlaxcala', // The capital city
            'Huamantla',
            'Apizaco',
            'Chiautempan',
            'Zacatelco',
            // Add more cities here
        ];
        
        $citiesVer = [
            'Xalapa', // The capital city
            'Veracruz',
            'Coatzacoalcos',
            'Córdoba',
            'Minatitlán',
            // Add more cities here
        ];
        
        $citiesYuc = [
            'Mérida', // The capital city
            'Tizimín',
            'Valladolid',
            'Progreso',
            'Kanasín',
            // Add more cities here
        ];
        
        $citiesZac = [
            'Zacatecas', // The capital city
            'Fresnillo',
            'Guadalupe',
            'Jerez',
            'Sombrerete',
            // Add more cities here
        ];
        
        
        // Code for Aguascalientes (Ags), state_id = 1
        foreach ($citiesAgs as $cityNameAgs) {
            City::factory()->create(['name' => $cityNameAgs, 'state_id' => 1]);
        }

        // Code for Baja California (Bc), state_id = 2
        foreach ($citiesBc as $cityNameBc) {
            City::factory()->create(['name' => $cityNameBc, 'state_id' => 2]);
        }

        // Code for Baja California Sur (Bcs), state_id = 3
        foreach ($citiesBcs as $cityNameBcs) {
            City::factory()->create(['name' => $cityNameBcs, 'state_id' => 3]);
        }

        // Code for Campeche (Camp), state_id = 4
        foreach ($citiesCamp as $cityNameCamp) {
            City::factory()->create(['name' => $cityNameCamp, 'state_id' => 4]);
        }

        // Code for Chiapas (Chis), state_id = 5
        foreach ($citiesChis as $cityNameChis) {
            City::factory()->create(['name' => $cityNameChis, 'state_id' => 5]);
        }

        // Code for Chihuahua (Chih), state_id = 6
        foreach ($citiesChih as $cityNameChih) {
            City::factory()->create(['name' => $cityNameChih, 'state_id' => 6]);
        }

        // Code for Ciudad de México (Distrito Federal) (CDMX), state_id = 7
        foreach ($citiesCDMX as $cityNameCDMX) {
            City::factory()->create(['name' => $cityNameCDMX, 'state_id' => 7]);
        }

        // Code for Coahuila (Coah), state_id = 8
        foreach ($citiesCoah as $cityNameCoah) {
            City::factory()->create(['name' => $cityNameCoah, 'state_id' => 8]);
        }

        // Code for Colima (Col), state_id = 9
        foreach ($citiesCol as $cityNameCol) {
            City::factory()->create(['name' => $cityNameCol, 'state_id' => 9]);
        }

        // Code for Durango (Dgo), state_id = 10
        foreach ($citiesDgo as $cityNameDgo) {
            City::factory()->create(['name' => $cityNameDgo, 'state_id' => 10]);
        }

        // Code for Estado de México (Edomex), state_id = 11
        foreach ($citiesEdomex as $cityNameEdomex) {
            City::factory()->create(['name' => $cityNameEdomex, 'state_id' => 11]);
        }

        // Code for Guanajuato (Gto), state_id = 12
        foreach ($citiesGto as $cityNameGto) {
            City::factory()->create(['name' => $cityNameGto, 'state_id' => 12]);
        }

        // Code for Guerrero (Gro), state_id = 13
        foreach ($citiesGro as $cityNameGro) {
            City::factory()->create(['name' => $cityNameGro, 'state_id' => 13]);
        }

        // Code for Hidalgo (Hgo), state_id = 14
        foreach ($citiesHgo as $cityNameHgo) {
            City::factory()->create(['name' => $cityNameHgo, 'state_id' => 14]);
        }

        // Code for Jalisco (Jal), state_id = 15
        foreach ($citiesJal as $cityNameJal) {
            City::factory()->create(['name' => $cityNameJal, 'state_id' => 15]);
        }

        // Code for Michoacán (Mich), state_id = 16
        foreach ($citiesMich as $cityNameMich) {
            City::factory()->create(['name' => $cityNameMich, 'state_id' => 16]);
        }

        // Code for Morelos (Mor), state_id = 17
        foreach ($citiesMor as $cityNameMor) {
            City::factory()->create(['name' => $cityNameMor, 'state_id' => 17]);
        }

        // Code for Nayarit (Nay), state_id = 18
        foreach ($citiesNay as $cityNameNay) {
            City::factory()->create(['name' => $cityNameNay, 'state_id' => 18]);
        }

        // Code for Nuevo León (NL), state_id = 19
        foreach ($citiesNL as $cityNameNL) {
            City::factory()->create(['name' => $cityNameNL, 'state_id' => 19]);
        }

        // Code for Oaxaca (Oax), state_id = 20
        foreach ($citiesOax as $cityNameOax) {
            City::factory()->create(['name' => $cityNameOax, 'state_id' => 20]);
        }

        // Code for Puebla (Pue), state_id = 21
        foreach ($citiesPue as $cityNamePue) {
            City::factory()->create(['name' => $cityNamePue, 'state_id' => 21]);
        }

        // Code for Querétaro (Qro), state_id = 22
        foreach ($citiesQro as $cityNameQro) {
            City::factory()->create(['name' => $cityNameQro, 'state_id' => 22]);
        }

        // Code for Quintana Roo (QR), state_id = 23
        foreach ($citiesQR as $cityNameQR) {
            City::factory()->create(['name' => $cityNameQR, 'state_id' => 23]);
        }

        // Code for San Luis Potosí (SLP), state_id = 24
        foreach ($citiesSLP as $cityNameSLP) {
            City::factory()->create(['name' => $cityNameSLP, 'state_id' => 24]);
        }

        // Code for Sinaloa (Sin), state_id = 25
        foreach ($citiesSin as $cityNameSin) {
            City::factory()->create(['name' => $cityNameSin, 'state_id' => 25]);
        }

        // Code for Sonora (Son), state_id = 26
        foreach ($citiesSon as $cityNameSon) {
            City::factory()->create(['name' => $cityNameSon, 'state_id' => 26]);
        }

        // Code for Tabasco (Tab), state_id = 27
        foreach ($citiesTab as $cityNameTab) {
            City::factory()->create(['name' => $cityNameTab, 'state_id' => 27]);
        }

        // Code for Tamaulipas (Tam), state_id = 28
        foreach ($citiesTam as $cityNameTam) {
            City::factory()->create(['name' => $cityNameTam, 'state_id' => 28]);
        }

        // Code for Tlaxcala (Tlax), state_id = 29
        foreach ($citiesTlax as $cityNameTlax) {
            City::factory()->create(['name' => $cityNameTlax, 'state_id' => 29]);
        }

        // Code for Veracruz (Ver), state_id = 30
        foreach ($citiesVer as $cityNameVer) {
            City::factory()->create(['name' => $cityNameVer, 'state_id' => 30]);
        }

        // Code for Yucatán (Yuc), state_id = 31
        foreach ($citiesYuc as $cityNameYuc) {
            City::factory()->create(['name' => $cityNameYuc, 'state_id' => 31]);
        }

        // Code for Zacatecas (Zac), state_id = 32
        foreach ($citiesZac as $cityNameZac) {
            City::factory()->create(['name' => $cityNameZac, 'state_id' => 32]);
        }

        \App\Models\User::factory(50)->create()->each(function ($user){
            $user->phone()->save(Phone::factory()->make());
        });
        \App\Models\Customer::factory(30)->create();
        \App\Models\Seller::factory(20)->create();
        \App\Models\Product::factory(60)->has(Version::factory(rand(1,3)))->has(Order::factory(rand(1,100)))->create();
        \App\Models\Price::factory(60)->create();
        \App\Models\Stock::factory(60)->create();
    }
}
