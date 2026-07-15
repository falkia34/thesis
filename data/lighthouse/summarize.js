const fs = require('fs');
const path = require('path');

const jsonDir = path.join(__dirname, 'json');
const outputPath = path.join(__dirname, 'summary.csv');

const files = fs.readdirSync(jsonDir).filter(f => f.endsWith('.json'));

const rows = [['No', 'URL', 'FCP', 'LCP', 'TBT', 'CLS', 'SI', 'Skor']];

files.forEach((file, index) => {
  const data = JSON.parse(fs.readFileSync(path.join(jsonDir, file), 'utf-8'));

  const url = data.finalUrl || '';
  const fcp = data.audits?.['first-contentful-paint']?.score ?? '';
  const lcp = data.audits?.['largest-contentful-paint']?.score ?? '';
  const tbt = data.audits?.['total-blocking-time']?.score ?? '';
  const cls = data.audits?.['cumulative-layout-shift']?.score ?? '';
  const si = data.audits?.['speed-index']?.score ?? '';
  const skor = data.categories?.performance?.score ?? '';

  rows.push([index + 1, url, fcp, lcp, tbt, cls, si, skor]);
});

const csv = rows.map(r => r.join(',')).join('\n');
fs.writeFileSync(outputPath, csv, 'utf-8');
console.log(`Written ${rows.length - 1} rows to ${outputPath}`);
