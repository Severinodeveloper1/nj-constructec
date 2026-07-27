<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copia de Reclamación {{ $complaint->claim_number }} — NJ CONSTRUCTEC</title>
</head>
<body style="margin:0;padding:0;background-color:#f3f4f6;font-family:'Segoe UI',Arial,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f3f4f6;padding:32px 16px;">
  <tr>
    <td align="center">
      <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background-color:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08);">

        {{-- Header --}}
        <tr>
          <td style="background:linear-gradient(135deg,#135f99 0%,#0d4a7a 100%);padding:32px 40px;text-align:center;">
            <p style="margin:0 0 4px 0;font-size:24px;font-weight:700;color:#ffffff;letter-spacing:1px;">NJ CONSTRUCTEC</p>
            <p style="margin:0;font-size:12px;color:rgba(255,255,255,0.7);letter-spacing:2px;text-transform:uppercase;">Ingeniería & Construcción de Confianza</p>
            <div style="margin:16px auto 0 auto;background-color:rgba(255,255,255,0.15);display:inline-block;padding:6px 20px;border-radius:20px;border:1px solid rgba(255,255,255,0.3);">
              <p style="margin:0;font-size:11px;font-weight:700;color:#ffffff;text-transform:uppercase;letter-spacing:1px;">📄 Libro de Reclamaciones Digital</p>
            </div>
          </td>
        </tr>

        {{-- Número de hoja --}}
        <tr>
          <td style="padding:28px 40px 0 40px;text-align:center;">
            <div style="background:linear-gradient(135deg,#fff7ed,#ffedd5);border:2px solid #fed7aa;border-radius:8px;padding:20px 24px;width:100%;box-sizing:border-box;">
              <p style="margin:0 0 4px 0;font-size:12px;color:#9ca3af;text-transform:uppercase;letter-spacing:1px;font-weight:600;">Número de Hoja de Reclamación</p>
              <p style="margin:0 0 4px 0;font-size:28px;font-weight:700;color:#9a3412;letter-spacing:2px;">{{ $complaint->claim_number }}</p>
              <p style="margin:0;font-size:12px;color:#78716c;">Registrado el {{ $complaint->created_at->timezone('America/Lima')->format('d/m/Y \a \l\a\s H:i') }}</p>
            </div>
          </td>
        </tr>

        {{-- Body --}}
        <tr>
          <td style="padding:28px 40px 8px 40px;">
            <p style="margin:0 0 6px 0;font-size:16px;color:#111827;font-weight:600;">Estimado(a) {{ $complaint->full_name }},</p>
            <p style="margin:0 0 24px 0;font-size:15px;color:#374151;line-height:1.8;">
              De conformidad con la normativa vigente de protección al consumidor de <strong>INDECOPI</strong>, le enviamos el comprobante de registro de su <strong style="color:#9a3412;">{{ $complaint->claim_type }}</strong> presentado a través de nuestro Libro de Reclamaciones Digital.
            </p>

            {{-- Detalle de la Reclamación --}}
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
              <tr>
                <td style="background-color:#fcae45;padding:10px 16px;border-radius:6px 6px 0 0;">
                  <p style="margin:0;font-size:12px;font-weight:700;color:#451a03;text-transform:uppercase;letter-spacing:0.5px;">📋 Detalle de tu Reclamación</p>
                </td>
              </tr>
              <tr>
                <td style="background-color:#f9fafb;border:1px solid #e5e7eb;border-top:none;border-radius:0 0 6px 6px;">
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <td style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Tipo de Registro</span><br>
                        <span style="font-size:14px;font-weight:700;color:#9a3412;">{{ $complaint->claim_type }}</span>
                      </td>
                      <td style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Bien Contratado</span><br>
                        <span style="font-size:14px;color:#111827;">{{ $complaint->good_type }}</span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Descripción del Bien</span><br>
                        <span style="font-size:14px;color:#374151;">{{ $complaint->good_description }}</span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Descripción de la disconformidad</span><br>
                        <span style="font-size:14px;color:#374151;font-style:italic;white-space:pre-line;">{{ $complaint->incident_description }}</span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding:10px 16px;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Pedido / Solicitud</span><br>
                        <span style="font-size:14px;color:#374151;font-style:italic;white-space:pre-line;">{{ $complaint->request }}</span>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            {{-- Aviso legal de plazo --}}
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:24px;">
              <tr>
                <td style="background-color:#eff6ff;border:1px solid #bfdbfe;border-left:4px solid #135f99;border-radius:0 6px 6px 0;padding:16px;">
                  <p style="margin:0 0 4px 0;font-size:13px;font-weight:700;color:#1e3a8a;">⏱️ Plazo de respuesta</p>
                  <p style="margin:0;font-size:13px;color:#1e40af;line-height:1.7;">
                    Conforme a la ley, NJ CONSTRUCTEC SAC dará respuesta a su disconformidad en un plazo no mayor a <strong>quince (15) días hábiles</strong> improrrogables desde la fecha de presentación de esta hoja de reclamación.
                  </p>
                </td>
              </tr>
            </table>

            <p style="margin:0;font-size:14px;color:#6b7280;text-align:center;line-height:1.7;">
              Atentamente,<br>
              <strong style="color:#135f99;font-size:15px;">NJ CONSTRUCTEC SAC</strong>
            </p>
          </td>
        </tr>

        {{-- Datos empresa --}}
        <tr>
          <td style="background-color:#f9fafb;border-top:1px solid #e5e7eb;padding:16px 40px;text-align:center;">
            <p style="margin:0;font-size:12px;color:#9ca3af;">
              @if($setting->address) 📍 {{ $setting->address }} @endif
              @if($setting->email) &nbsp;|&nbsp; 📧 <a href="mailto:{{ $setting->email }}" style="color:#135f99;text-decoration:none;">{{ $setting->email }}</a> @endif
              @if($setting->phone) &nbsp;|&nbsp; 📞 {{ $setting->phone }} @endif
            </p>
          </td>
        </tr>

        {{-- Footer --}}
        <tr>
          <td style="background-color:#f3f4f6;padding:16px 40px;text-align:center;border-top:1px solid #e5e7eb;">
            <p style="margin:0;font-size:11px;color:#9ca3af;line-height:1.8;">
              Este correo fue generado automáticamente. Consérvelo como comprobante de su reclamación.<br>
              © {{ date('Y') }} NJ CONSTRUCTEC SAC — Todos los derechos reservados.
            </p>
          </td>
        </tr>

      </table>
    </td>
  </tr>
</table>

</body>
</html>
