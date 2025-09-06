
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3D Studio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/three@0.132.2/build/three.min.js"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body {
      margin: 0;
      overflow-x: hidden;
    }
    canvas {
      display: block;
    }
  </style>
</head>
<body>
  <div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-900 via-purple-900 to-violet-900">
    <!-- 3D Background -->
    <div id="three-container" class="absolute inset-0 z-0"></div>
    
    <!-- Overlay gradient for better text readability -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/40 z-10"></div>
    
    <!-- Content Layer -->
    <div class="relative z-20 min-h-screen">
      <!-- Navigation -->
      <nav class="flex items-center justify-between p-6 lg:px-12">
        <div class="text-2xl font-bold text-white">
          3D<span class="text-purple-400">Studio</span>
        </div>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">
          <a class="text-white/80 hover:text-white">Home</a>
          <a class="text-white/80 hover:text-white">About</a>
          <a class="text-white/80 hover:text-white">Contact</a>
          <a class="text-white/80 hover:text-white">Services</a>
        </div>



        
        <!-- Mobile Menu Button -->
        <button 
          id="menu-toggle"
          class="md:hidden text-white p-2"
        >
          <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
      </nav>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden md:hidden absolute top-20 left-6 right-6 bg-black/80 backdrop-blur-lg rounded-lg p-6 border border-white/10">
        <div class="flex flex-col space-y-4">
          <a href="#" class="text-white/80 hover:text-white transition-colors">Home</a>
          <a href="#" class="text-white/80 hover:text-white transition-colors">About</a>
          <a href="#" class="text-white/80 hover:text-white transition-colors">Services</a>
          <a href="#" class="text-white/80 hover:text-white transition-colors">Contact</a>
        </div>
      </div>

      <!-- Hero Section -->
      <div class="flex items-center justify-center min-h-[calc(100vh-100px)] px-6 lg:px-12">
        <div class="text-center max-w-4xl">
          <div class="mb-6">
            <span class="inline-flex items-center px-4 py-2 bg-purple-500/20 backdrop-blur-sm rounded-full text-purple-300 text-sm border border-purple-500/30">
              <i data-lucide="star" class="w-4 h-4 mr-2"></i>
              Premium 3D Experience
            </span>
          </div>
          
          <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
            Immersive
            <span class="block bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
              3D Worlds
            </span>
          </h1>
          
          <p class="text-xl text-white/70 mb-8 max-w-2xl mx-auto leading-relaxed">
            Experience the future of web design with stunning 3D animations, 
            interactive elements, and cutting-edge visual effects that captivate and engage.
          </p>
          
          <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <button class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
              <i data-lucide="play" class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform"></i>
              Get Started
            </button>
            
            <button class="inline-flex items-center px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-semibold rounded-full border border-white/20 hover:border-white/30 transition-all duration-300">
              Learn More
              <i data-lucide="chevron-right" class="w-5 h-5 ml-2"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Feature Cards -->
      <div class="px-6 lg:px-12 pb-20">
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
          <div class="group p-8 bg-white/5 backdrop-blur-lg rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-300 hover:scale-105">
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <div class="w-6 h-6 bg-white rounded"></div>
            </div>
            <h3 class="text-xl font-semibold text-white mb-4">3D Animations</h3>
            <p class="text-white/70 leading-relaxed">
              Smooth, performant 3D animations that bring your content to life with stunning visual appeal.
            </p>
          </div>
          
          <div class="group p-8 bg-white/5 backdrop-blur-lg rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-300 hover:scale-105">
            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <div class="w-6 h-6 bg-white rounded-full"></div>
            </div>
            <h3 class="text-xl font-semibold text-white mb-4">Interactive Design</h3>
            <p class="text-white/70 leading-relaxed">
              Engaging interactive elements that respond to user input and create memorable experiences.
            </p>
          </div>
          
          <div class="group p-8 bg-white/5 backdrop-blur-lg rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-300 hover:scale-105">
            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <div class="w-6 h-6 bg-white rounded-lg transform rotate-45"></div>
            </div>
            <h3 class="text-xl font-semibold text-white mb-4">Responsive Layout</h3>
            <p class="text-white/70 leading-relaxed">
              Fully responsive design that looks perfect on all devices, from mobile to desktop.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Initialize Lucide icons
    lucide.createIcons();
    
    // Mobile menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    let menuOpen = false;
    
    menuToggle.addEventListener('click', () => {
      menuOpen = !menuOpen;
      mobileMenu.classList.toggle('hidden');
      
      // Update icon
      const icon = menuToggle.querySelector('i');
      if (menuOpen) {
        icon.setAttribute('data-lucide', 'x');
      } else {
        icon.setAttribute('data-lucide', 'menu');
      }
      lucide.createIcons();
    });

    // Three.js implementation
    document.addEventListener('DOMContentLoaded', () => {
      const mountRef = document.getElementById('three-container');
      if (!mountRef) return;

      // Scene setup
      const scene = new THREE.Scene();
      const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
      const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
      
      renderer.setSize(window.innerWidth, window.innerHeight);
      renderer.setClearColor(0x000000, 0);
      mountRef.appendChild(renderer.domElement);

      // Lighting
      const ambientLight = new THREE.AmbientLight(0x404040, 0.6);
      scene.add(ambientLight);
      
      const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
      directionalLight.position.set(10, 10, 5);
      scene.add(directionalLight);

      // Create floating geometric shapes
      const shapes = [];
      const geometries = [
        new THREE.BoxGeometry(1, 1, 1),
        new THREE.SphereGeometry(0.7, 32, 32),
        new THREE.ConeGeometry(0.7, 1.5, 8),
        new THREE.OctahedronGeometry(0.8),
        new THREE.TetrahedronGeometry(1)
      ];

      const colors = [0x6366f1, 0x8b5cf6, 0x06b6d4, 0x10b981, 0xf59e0b, 0xef4444];

      for (let i = 0; i < 20; i++) {
        const geometry = geometries[Math.floor(Math.random() * geometries.length)];
        const material = new THREE.MeshPhongMaterial({ 
          color: colors[Math.floor(Math.random() * colors.length)],
          transparent: true,
          opacity: 0.8,
          shininess: 100
        });
        
        const mesh = new THREE.Mesh(geometry, material);
        mesh.position.set(
          (Math.random() - 0.5) * 30,
          (Math.random() - 0.5) * 30,
          (Math.random() - 0.5) * 30
        );
        
        mesh.rotation.set(
          Math.random() * Math.PI,
          Math.random() * Math.PI,
          Math.random() * Math.PI
        );

        // Add custom properties for animation
        mesh.userData = {
          rotationSpeed: {
            x: (Math.random() - 0.5) * 0.02,
            y: (Math.random() - 0.5) * 0.02,
            z: (Math.random() - 0.5) * 0.02
          },
          floatSpeed: Math.random() * 0.02 + 0.01,
          floatOffset: Math.random() * Math.PI * 2
        };
        
        scene.add(mesh);
        shapes.push(mesh);
      }

      // Create particle system
      const particleGeometry = new THREE.BufferGeometry();
      const particleCount = 100;
      const positions = new Float32Array(particleCount * 3);
      
      for (let i = 0; i < particleCount * 3; i += 3) {
        positions[i] = (Math.random() - 0.5) * 50;
        positions[i + 1] = (Math.random() - 0.5) * 50;
        positions[i + 2] = (Math.random() - 0.5) * 50;
      }
      
      particleGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
      
      const particleMaterial = new THREE.PointsMaterial({
        color: 0xffffff,
        size: 0.1,
        transparent: true,
        opacity: 0.6
      });
      
      const particles = new THREE.Points(particleGeometry, particleMaterial);
      scene.add(particles);

      camera.position.z = 15;

      // Animation loop
      const animate = () => {
        requestAnimationFrame(animate);

        // Animate shapes
        shapes.forEach((shape) => {
          shape.rotation.x += shape.userData.rotationSpeed.x;
          shape.rotation.y += shape.userData.rotationSpeed.y;
          shape.rotation.z += shape.userData.rotationSpeed.z;
          
          shape.position.y += Math.sin(Date.now() * shape.userData.floatSpeed + shape.userData.floatOffset) * 0.01;
        });

        // Animate particles
        const positions = particles.geometry.attributes.position.array;
        for (let i = 0; i < positions.length; i += 3) {
          positions[i + 1] += Math.sin(Date.now() * 0.001 + positions[i]) * 0.01;
        }
        particles.geometry.attributes.position.needsUpdate = true;

        // Rotate entire scene slowly
        scene.rotation.y += 0.001;
        
        renderer.render(scene, camera);
      };

      animate();

      // Handle resize
      const handleResize = () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
      };

      window.addEventListener('resize', handleResize);
    });
  </script>
</body>
</html>




  </body>
</html>
