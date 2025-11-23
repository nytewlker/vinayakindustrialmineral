<?php
$products = [
    [
        'name' => 'Quick Lime Powder',
        'slug' => 'quick-lime-powder',
        'description' => 'High-quality quick lime powder used in various industrial applications. Produced from premium limestone with high calcium content.',
        'specs' => [
            'Calcium Content' => '85-90%',
            'Density' => '1.2 g/cm³',
            'Particle Size' => '100-200 mesh',
            'Moisture' => '< 2%',
            'Purity' => '> 95%'
        ],
        'applications' => [
            'Water Treatment',
            'Construction Industry',
            'Chemical Manufacturing',
            'Metallurgy',
            'Agriculture',
            'Steel Production'
        ],
        'image' => 'img/product img/quick-lime.jpg',
        'packaging' => '50 kg bags, 1000 kg bags'
    ],
    [
        'name' => 'Anti Moisture Powder',
        'slug' => 'anti-moisture-powder',
        'description' => 'Advanced anti-moisture powder formulation that absorbs and prevents moisture accumulation. Ideal for packaging and storage applications.',
        'specs' => [
            'Moisture Absorption' => '200-300%',
            'Density' => '0.8 g/cm³',
            'Particle Size' => '150-250 mesh',
            'pH' => '8-9',
            'Shelf Life' => '24 months'
        ],
        'applications' => [
            'Pharmaceutical Packaging',
            'Food Industry',
            'Electronics Storage',
            'Textiles',
            'Cosmetics Packaging',
            'Spice Industry'
        ],
        'image' => 'img/product img/anti-moisture.jpg',
        'packaging' => '25 kg bags, 500 kg bags'
    ],
    [
        'name' => 'Micronised Calcite Powder',
        'slug' => 'micronised-calcite-powder',
        'description' => 'Ultra-fine micronised calcite powder available in both coated and uncoated variants. Perfect for precision industrial applications.',
        'specs' => [
            'CaCO3 Content' => '98-99%',
            'Brightness' => '> 95%',
            'Fineness' => '1-10 microns',
            'Whiteness' => '> 90%',
            'Oil Absorption' => '20-25 ml/100g'
        ],
        'applications' => [
            'Paper & Pulp Industry',
            'Plastics Manufacturing',
            'Paints & Coatings',
            'Rubber Industry',
            'Sealants & Adhesives',
            'Pharmaceuticals'
        ],
        'variants' => ['Coated', 'Uncoated'],
        'image' => 'img/product img/micronise-calcite.jpg',
        'packaging' => '40 kg bags, 800 kg bags'
    ],
    [
        'name' => 'Micronised Dolomite Powder',
        'slug' => 'micronised-dolomite-powder',
        'description' => 'Fine micronised dolomite powder with balanced calcium and magnesium content. Available in coated and uncoated forms.',
        'specs' => [
            'CaMg(CO3)2' => '97-98%',
            'MgO Content' => '45-48%',
            'CaO Content' => '50-53%',
            'Fineness' => '2-15 microns',
            'Whiteness' => '88-92%'
        ],
        'applications' => [
            'Refractory Materials',
            'Ceramics Industry',
            'Animal Feed Supplement',
            'Glass Manufacturing',
            'Fertilizer Industry',
            'Steelmaking'
        ],
        'variants' => ['Coated', 'Uncoated'],
        'image' => 'img/product img/micronise-dolomite.jpg',
        'packaging' => '40 kg bags, 800 kg bags'
    ],
    [
        'name' => 'Talc Powder',
        'slug' => 'talc-powder',
        'description' => 'Premium quality talc powder with excellent lubrication properties and smooth texture. Ideal for personal care and industrial uses.',
        'specs' => [
            'Talc Content' => '95-97%',
            'Particle Size' => '2-10 microns',
            'Brightness' => '> 92%',
            'Moisture' => '< 1%',
            'Density' => '2.7 g/cm³'
        ],
        'applications' => [
            'Cosmetics & Personal Care',
            'Plastics & Polymers',
            'Paints & Coatings',
            'Rubber Products',
            'Ceramics',
            'Electrical Insulation'
        ],
        'image' => 'img/product img/talc.jpg',
        'packaging' => '50 kg bags, 1000 kg bags'
    ],
    [
        'name' => 'Dolomite Granules',
        'slug' => 'dolomite-granules',
        'description' => 'Coarse dolomite granules for applications requiring larger particle sizes. Excellent for aggregate and fill applications.',
        'specs' => [
            'CaMg(CO3)2' => '96-98%',
            'Granule Size' => '2-8 mm',
            'Density' => '2.85 g/cm³',
            'Hardness' => 'Mohs 3.5-4',
            'Moisture' => '< 0.5%'
        ],
        'applications' => [
            'Aggregate for Roads',
            'Railway Ballast',
            'Concrete Manufacturing',
            'Landscaping',
            'Soil Amendment',
            'Construction Fill'
        ],
        'image' => 'img/product img/dolomite-granuls.jpg',
        'packaging' => '1000 kg bags, Bulk supply available'
    ],
    [
        'name' => 'Soapstone and Talc Powder',
        'slug' => 'soapstone-talc-powder',
        'description' => 'Blend of soapstone and talc powder combining excellent slip and lubrication properties with superior thermal stability.',
        'specs' => [
            'Soapstone Content' => '40-50%',
            'Talc Content' => '50-60%',
            'Fineness' => '3-12 microns',
            'Oil Absorption' => '30-35 ml/100g',
            'Density' => '2.6 g/cm³'
        ],
        'applications' => [
            'Cosmetics Industry',
            'Plastics Additives',
            'Ceramics Manufacturing',
            'Rubber Compounds',
            'Paint & Coating Industry',
            'Tire Manufacturing'
        ],
        'image' => 'img/product img/soapstone.jpg',
        'packaging' => '45 kg bags, 900 kg bags'
    ],
    [
        'name' => 'Pyrophyllite Powder',
        'slug' => 'pyrophyllite-powder',
        'description' => 'High-grade pyrophyllite powder with excellent thermal and chemical resistance. Perfect for advanced industrial applications.',
        'specs' => [
            'Al2O3·4SiO2·H2O' => '94-96%',
            'Fineness' => '1-5 microns',
            'Brightness' => '> 90%',
            'Loss on Ignition' => '3-5%',
            'Density' => '2.8 g/cm³'
        ],
        'applications' => [
            'Refractories',
            'Ceramics & Porcelain',
            'Electrical Industry',
            'Insulation Materials',
            'Paint & Coating Additives',
            'Advanced Ceramics'
        ],
        'image' => 'img/product img/pyrophylite.jpg',
        'packaging' => '50 kg bags, 1000 kg bags'
    ]
];
?>