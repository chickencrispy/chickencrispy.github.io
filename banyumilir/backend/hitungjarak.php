<script>
  // Fungsi untuk menghitung jarak menggunakan rumus Haversine
  function haversineDistance(lat1, lon1, lat2, lon2) {
      const R = 6371; // Radius bumi dalam kilometer
      const toRad = (degree) => degree * (Math.PI / 180);

      const dLat = toRad(lat2 - lat1);
      const dLon = toRad(lon2 - lon1);
      const a = 
          Math.sin(dLat / 2) * Math.sin(dLat / 2) +
          Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) *
          Math.sin(dLon / 2) * Math.sin(dLon / 2);
      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

      return R * c; // Hasil dalam kilometer
  }

  // Koordinat awal
  console.log(lat);
  console.log(lon);
  
  const latAwal = -8.7975686;
  const lonAwal = 115.2063515;

  // Koordinat tujuan
  const latTujuan = -8.16305115;
  const lonTujuan = 115.02246398708351;

  // Hitung jarak
  const jarak = haversineDistance(latAwal, lonAwal, latTujuan, lonTujuan);

  console.log(`Jarak antara titik awal dan titik tujuan adalah ${jarak.toFixed(2)} kilometer.`);
  
</script>






