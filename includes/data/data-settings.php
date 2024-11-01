<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Array of settings
 */
return array(
	'enabled'           => array(
		'title'           => __( 'Activar OCA', 'woocommerce-shipping-oca' ),
		'type'            => 'checkbox',
		'label'           => __( 'Activar este método de envió', 'woocommerce-shipping-oca' ),
		'default'         => 'no'
	),

	'debug'      				=> array(
		'title'           => __( 'Modo Depuración', 'woocommerce-shipping-oca' ),
		'label'           => __( 'Activar modo depuración', 'woocommerce-shipping-oca' ),
		'type'            => 'checkbox',
		'default'         => 'no',
		'desc_tip'    => true,
		'description'     => __( 'Activar el modo de depuración para mostrar información de depuración en la compra/pago y envío.', 'woocommerce-shipping-oca' )
	),

	'title'             => array(
		'title'           => __( 'Título', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( 'Controla el título que el usuario ve durante el pago.', 'woocommerce-shipping-oca' ),
		'default'         => __( 'OCA', 'woocommerce-shipping-oca' ),
		'desc_tip'        => true
	),
	
   'origen'           => array(
		'title'           => __( 'Detalles de Origen', 'woocommerce-shipping-oca' ),
		'type'            => 'title',
		'description'     => __( 'Dirección de retiro / Sucursal origen - Todos los campos son obligatorios.', 'woocommerce-shipping-oca' ),
    ),
	
	'origin_contacto' 	=> array(
		'title'           => __( 'Nombre y Apellido', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( 'Datos de Contacto', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),

	'origin_email' 	=> array(
		'title'           => __( 'Email', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),	
	
	'origin_calle'      => array(
		'title'           => __( 'Calle de Origen', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),
	
	'origin_numero'     => array(
		'title'           => __( 'Número de Calle', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),
	
	'origin_piso'       => array(
		'title'           => __( 'Piso', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),
	
	'origin_depto'      => array(
		'title'           => __( 'Depto', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),
	
	'origin'            => array(
		'title'           => __( 'Código Postal', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( 'Ingrese el código postal del <strong> remitente </ strong>.', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),
	
	'origin_localidad' 	=> array(
		'title'           => __( 'Localidad', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),		
	
	'origin_provincia' 	=> array(
		'title'           => __( 'Provincia', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),					
	
	'origin_observaciones' 	=> array(
		'title'           => __( 'Observaciones', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),	
  
	'envio_gratis' 	=> array(
		'title'           => __( 'Envio GRATIS montos mayores a', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
		'default'         => '',
		'desc_tip'        => true
    ),	
  
	'plazo_entrega'   => array(
		'title'           => __( 'Mostrar plazo de entrega', 'woocommerce-shipping-oca' ),
		'label'           => __( 'Activar plazo de entrega', 'woocommerce-shipping-oca' ),
		'type'            => 'checkbox',
		'default'         => 'no',
	),  
   
   'plazo_texto'          => array(
		'title'           => __( 'Texto de plazo de entrega', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( 'Descripcion Plazo de entrega', 'woocommerce-shipping-oca' ),
		'default'         => __( '', 'woocommerce-shipping-oca' ),
    'placeholder' => __( 'Lo recibís en ', 'meta-box' ),
    ) ,
  
   'api'              => array(
		'title'           => __( 'Configuración de la API', 'woocommerce-shipping-oca' ),
		'type'            => 'title',
		'description'     => __( '', 'woocommerce-shipping-oca' ),
    ),
	
   'api_key'          => array(
		'title'           => __( 'Wanderlust API Key', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( 'Wanderlust API Key', 'woocommerce-shipping-oca' ),
		'default'         => __( 'WeWw7yPc2zEpsXOjD', 'woocommerce-shipping-oca' ),
    'placeholder' => __( 'WeWw7yPc2zEpsXOjD', 'meta-box' ),
    ),
	
   'ajuste_precio'    => array(
		'title'           => __( 'Ajustar costos de envío % (porcentual)', 'woocommerce-shipping-oca' ),
		'type'            => 'text',
		'description'     => __( 'Agregar costo extra al precio. Ingresar valor numérico mayor a 0.', 'woocommerce-shipping-oca' ),
		'default'         => __( '', 'woocommerce-shipping-oca' ),
    'placeholder' => __( '1', 'meta-box' ),		
    ),	

		'mercado_pago'      => array(
				'title'           => __( 'No cobrar el costo de envío', 'woocommerce-shipping-oca' ),
				'label'           => __( 'No agregar el costo de envío en el Total (carrito/checkout).', 'woocommerce-shipping-oca' ),
				'type'            => 'checkbox',
				'default'         => 'no',
				'desc_tip'    => true,
				'description'     => __( 'Al activar este modulo, no se agregara el costo de envío en el Total (carrito/checkout).', 'woocommerce-shipping-oca' )
		),	
	
 		'redondear_total'      => array(
				'title'           => __( 'Ajustar Totales', 'woocommerce-shipping-oca' ),
				'label'           => __( 'Mostrar costos totales sin decimales. Ej: $56.96 a $57', 'woocommerce-shipping-oca' ),
				'type'            => 'checkbox',
				'default'         => 'no',
				'desc_tip'    => true,
				'description'     => __( 'Mostrar costos totales sin decimales. Ej: $56.96 a $57', 'woocommerce-shipping-oca' )
		),	

    'packing'           => array(
		'title'           => __( 'Paquetes y Servicios', 'woocommerce-shipping-oca' ),
		'type'            => 'title',
    ),

	'packing_method'   => array(
		'title'           => __( 'Método Embalaje', 'woocommerce-shipping-oca' ),
		'type'            => 'select',
		'default'         => '',
		'class'           => 'packing_method',
		'options'         => array(
			'per_item'       => __( 'Por defecto: artículos individuales.', 'woocommerce-shipping-oca' ),
		),
	),

 	'services'  => array(
		'type'            => 'service'
	),

);