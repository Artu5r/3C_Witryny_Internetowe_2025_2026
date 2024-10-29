let role = 'user';
let poziomDostepu;

if (role === 'admin') {
    poziomDostepu = 'Pełen dostęp';
} else if (role === 'user') {
    poziomDostepu = 'Ograniczony dostęp';
} else if (role === 'guest') {
    poziomDostepu = 'Brak dostępu';
} else {
    poziomDostepu = 'Nieznana rola';
}

document.write(`Poziom dostępu: ${poziomDostepu}`);
