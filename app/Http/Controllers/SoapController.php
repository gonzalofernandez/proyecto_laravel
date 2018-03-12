<?php

namespace App\Http\Controllers;

use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Soap\Request\GetConversionAmount;
use App\Soap\Response\GetConversionAmountResponse;

class SoapController extends Controller {
    /* public function geolocation() {
      //
      $categorias = \App\Categoria::all();

      // Add a new service to the wrapper
      \SoapWrapper::add('geolocation', function ($service) {
      $service
      ->wsdl('http://www.ipswitch.com/netapps/geolocation/iplocate.asmx?WSDL')
      ->trace(true)                                                   // Optional: (parameter: true/false)
      ->cache(WSDL_CACHE_NONE);                                      // Optional: Set the WSDL cache
      });

      // crear rango de ips de Valencia, Castilla la Mancha y Madrid
      $arrayDeIps = ['95.215.61.188', '85.56.255.74', '94.126.240.2'];
      // Cojo una ip aleatoriamente
      $ip = $arrayDeIps[array_rand($arrayDeIps)];
      // añadir la ip
      $data = ['sIPAddress' => $ip];
      $dataLocation = null;

      // Using the added service
      SoapWrapper::service('geolocation', function ($service) use ($data, &$dataLocation) {
      $dataLocation = ($service->call('GetLocationRawOutput', [$data])->GetLocationRawOutputResult);
      });

      $region = $dataLocation->geolocation_data->region_name;
      $pais = $dataLocation->geolocation_data->country_name;

      switch ($region) {
      case "Madrid":
      $lat = 40.42495995783903;
      $long = -3.5478396713733673;
      $datosUbicacion = ['Direccion' => "C/Honduras Nº 56, (junto a boca de metro La Rambla).",
      'CP' => "28822-('$region')('$pais')",
      'Horario_diario' => "L-V: 10.00 a 14.00h. y 17.00 a 20.00h.",
      'HorarioFS' => "S: 10.00 a 14.00h.",
      'Telefono' => "91 896 23 56",
      'Comentarios' => "La nueva tienda Dobike se encuentra excelentemente comunicada. Con 1.000 metros cuadrados de"
      . " exposición y taller, se convierte en la mayor tienda de bicicletas de Madrid. Situada junto a la boca de metro La Rambla,"
      . " con acceso cercano a vías de carretera M-40, N-II, M-45, el acceso en coche o en transporte público es"
      . " sencillo, al contar con paradas de Metro y autobuses cercanos a la tienda."];
      break;
      case "Castilla-La Mancha":
      $lat = 38.728770;
      $long = -4.079549;
      $datosUbicacion = ['Direccion' => "C/de Cervantes Nº 153, carretera principal de Argamasilla de Calatrava",
      'CP' => "13440-('$region')('$pais')",
      'Horario_diario' => "L-V: 10.00 a 14.00h. y 17.00 a 20.00h.",
      'HorarioFS' => "S: 10.00 a 14.00h.",
      'Telefono' => "91 896 23 66",
      'Comentarios' => "La segunda tienda Dobike, se encuentra localizada en un lugar estratégico."
      . " Ubicada junto a una de las salidas de la Ctra. de Puertollano, y facil acceso desde la carretera N-420."
      . " Si prefieres acercarte en transporte público,"
      . " la estación de Metro se encuentra a unos 300 m. aproximadamente de la tienda."];
      break;
      case "Comunidad Valenciana":
      $lat = 39.662648;
      $long = -0.215375;
      $datosUbicacion = ['Direccion' => "C/Virgen del losar Nº 4, a pocos metros del super mercado Mercadona",
      'CP' => "46520-('$region')('$pais')",
      'Horario_diario' => "L-V: 10.00 a 14.00h. y 17.00 a 20.00h.",
      'HorarioFS' => "S: 10.00 a 14.00h.",
      'Telefono' => "91 896 23 66",
      'Comentarios' => "La tercera tienda Sanferbike, Sanferbike Norte, con sus 450 metros cuadrados de exposición,
      el acceso en coche es extremadamente sencillo, siguiendo la carretera N-237. Además contamos con parking para clientes.
      En esta tienda disponemos del rincón para el triatleta."];
      break;
      }

      return view('layouts.geolocalizacion', ['lat' => $lat, 'long' => $long, 'datos' => $datosUbicacion, 'region' => $region, 'categorias' => $categorias]);
      } */

    /**
     * @var SoapWrapper
     */
    protected $soapWrapper;

    /**
     * SoapController constructor.
     *
     * @param SoapWrapper $soapWrapper
     */
    public function __construct(SoapWrapper $soapWrapper) {
        $this->soapWrapper = $soapWrapper;
    }

    /**
     * Use the SoapWrapper
     */
    public function show() {
        $this->soapWrapper->add('Geolocation', function ($service) {
            $service
                    ->wsdl('http://www.ipswitch.com/netapps/geolocation/iplocate.asmx?WSDL')
                    ->trace(true)                                                   // Optional: (parameter: true/false)
                    ->cache(WSDL_CACHE_NONE);                                      // Optional: Set the WSDL cache
        });

        // crear rango de ips de Valencia, Castilla la Mancha y Madrid
        $arrayDeIps = ['95.215.61.188', '85.56.255.74', '94.126.240.2'];
        // Cojo una ip aleatoriamente
        $ip = $arrayDeIps[array_rand($arrayDeIps)];
        // añadir la ip
        $data = ['sIPAddress' => $ip];
        $dataLocation = null;

        // Using the added service
        /* SoapWrapper::service('geolocation', function ($service) use ($data, &$dataLocation) {
          $dataLocation = ($service->call('GetLocationRawOutput', [$data])->GetLocationRawOutputResult);
          }); */

        // Without classmap
        $response = $this->soapWrapper->call('Geolocation.GetLocationRawOutput', [$data])->GetLocationRawOutputResult;
        $region = $response->geolocation_data->region_name;
        $pais = $response->geolocation_data->country_name;
        switch ($region) {
            case "Madrid":
                $lat= 40.42495995783903; 
                $long = -3.5478396713733673;
                $datosUbicacion = ['Direccion' => "C/Honduras Nº 56, (junto a boca de metro La Rambla).",
                    'CP' => "28822-('$region')('$pais')",
                    'Horario_diario' => "L-V: 10.00 a 14.00h. y 17.00 a 20.00h.",
                    'HorarioFS' => "S: 10.00 a 14.00h.",
                    'Telefono' => "91 896 23 56",
                    'Comentarios' => "La nueva tienda Dobike se encuentra excelentemente comunicada. Con 1.000 metros cuadrados de"
                    . " exposición y taller, se convierte en la mayor tienda de bicicletas de Madrid. Situada junto a la boca de metro La Rambla,"
                    . " con acceso cercano a vías de carretera M-40, N-II, M-45, el acceso en coche o en transporte público es"
                    . " sencillo, al contar con paradas de Metro y autobuses cercanos a la tienda."];
                break;
            case "Castilla-La Mancha":
                $lat = 38.728770; 
                $long = -4.079549;
                $datosUbicacion = ['Direccion' => "C/de Cervantes Nº 153, carretera principal de Argamasilla de Calatrava",
                    'CP' => "13440-('$region')('$pais')",
                    'Horario_diario' => "L-V: 10.00 a 14.00h. y 17.00 a 20.00h.",
                    'HorarioFS' => "S: 10.00 a 14.00h.",
                    'Telefono' => "91 896 23 66",
                    'Comentarios' => "La segunda tienda Dobike, se encuentra localizada en un lugar estratégico."
                    . " Ubicada junto a una de las salidas de la Ctra. de Puertollano, y facil acceso desde la carretera N-420."
                    . " Si prefieres acercarte en transporte público,"
                    . " la estación de Metro se encuentra a unos 300 m. aproximadamente de la tienda."];
                break;
            case "Comunidad Valenciana":
                $lat = 39.662648;
                $long = -0.215375;
                $datosUbicacion = ['Direccion' => "C/Virgen del losar Nº 4, a pocos metros del super mercado Mercadona",
                    'CP' => "46520-('$region')('$pais')",
                    'Horario_diario' => "L-V: 10.00 a 14.00h. y 17.00 a 20.00h.",
                    'HorarioFS' => "S: 10.00 a 14.00h.",
                    'Telefono' => "91 896 23 66",
                    'Comentarios' => "La tercera tienda Sanferbike, Sanferbike Norte, con sus 450 metros cuadrados de exposición,
                        el acceso en coche es extremadamente sencillo, siguiendo la carretera N-237. Además contamos con parking para clientes. 
                        En esta tienda disponemos del rincón para el triatleta."];
                break;
        }
        $categorias = session('categorias');
        $productos = session('productos');
        return view('layouts.geolocalizacion', compact('categorias', 'productos', 'lat', 'long', 'datosUbicacion', 'region'));
    }

}
