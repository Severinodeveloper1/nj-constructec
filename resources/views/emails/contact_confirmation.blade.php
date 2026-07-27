<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hemos recibido tu consulta — NJ CONSTRUCTEC</title>
</head>
<body style="margin:0;padding:0;background-color:#f3f4f6;font-family:'Segoe UI',Arial,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f3f4f6;padding:32px 16px;">
  <tr>
    <td align="center">
      <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background-color:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08);">

        {{-- Header con logo --}}
        <tr>
          <td style="background:linear-gradient(135deg,#135f99 0%,#0d4a7a 100%);padding:32px 40px;text-align:center;">
            <p style="margin:0 0 4px 0;font-size:24px;font-weight:700;color:#ffffff;letter-spacing:1px;">NJ CONSTRUCTEC</p>
            <p style="margin:0;font-size:12px;color:rgba(255,255,255,0.7);letter-spacing:2px;text-transform:uppercase;">Ingeniería & Construcción de Confianza</p>
          </td>
        </tr>

        {{-- Icono de confirmación --}}
        <tr>
          <td style="text-align:center;padding:32px 40px 0 40px;">
            <div style="display:inline-block;background-color:#dcfce7;border-radius:50%;width:64px;height:64px;line-height:64px;text-align:center;font-size:32px;margin-bottom:16px;">✅</div>
            <h2 style="margin:0 0 8px 0;font-size:22px;font-weight:700;color:#111827;">¡Mensaje recibido con éxito!</h2>
            <p style="margin:0;font-size:15px;color:#6b7280;">Hola, <strong style="color:#135f99;">{{ $contact->full_name }}</strong></p>
          </td>
        </tr>

        {{-- Body --}}
        <tr>
          <td style="padding:24px 40px 32px 40px;">
            <p style="margin:0 0 24px 0;font-size:15px;color:#374151;line-height:1.8;text-align:center;">
              Hemos recibido correctamente tu consulta. Nuestro equipo especializado la está revisando y se pondrá en contacto contigo a la brevedad posible.
            </p>

            {{-- Resumen --}}
            <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f9fafb;border:1px solid #e5e7eb;border-radius:8px;overflow:hidden;margin-bottom:24px;">
              <tr>
                <td style="background-color:#135f99;padding:12px 16px;">
                  <p style="margin:0;font-size:12px;font-weight:700;color:#ffffff;text-transform:uppercase;letter-spacing:1px;">📋 Resumen de tu Consulta</p>
                </td>
              </tr>
              <tr>
                <td style="padding:16px;">
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <td style="padding:6px 0;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:12px;color:#6b7280;font-weight:600;text-transform:uppercase;">Asunto</span><br>
                        <span style="font-size:14px;color:#111827;font-weight:600;">{{ $contact->subject }}</span>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding:10px 0 4px 0;">
                        <span style="font-size:12px;color:#6b7280;font-weight:600;text-transform:uppercase;">Tu mensaje</span><br>
                        <span style="font-size:14px;color:#4b5563;font-style:italic;line-height:1.6;white-space:pre-line;">{{ $contact->message }}</span>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            {{-- WhatsApp CTA --}}
            @if($setting->whatsapp_phone)
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:24px;">
              <tr>
                <td style="background:linear-gradient(135deg,#dcfce7,#bbf7d0);border:1px solid #86efac;border-radius:8px;padding:16px;text-align:center;">
                  <p style="margin:0 0 8px 0;font-size:13px;color:#166534;font-weight:600;">¿Necesitas atención inmediata?</p>
                  <p style="margin:0;font-size:14px;color:#15803d;">
                    📱 Escríbenos al WhatsApp: <strong>{{ $setting->whatsapp_phone }}</strong>
                  </p>
                </td>
              </tr>
            </table>
            @endif

            <p style="margin:0;font-size:14px;color:#6b7280;text-align:center;line-height:1.7;">
              Atentamente,<br>
              <strong style="color:#135f99;font-size:15px;">El equipo de NJ CONSTRUCTEC SAC</strong>
            </p>
          </td>
        </tr>

        {{-- Divider + Contact Info --}}
        <tr>
          <td style="background-color:#f9fafb;border-top:1px solid #e5e7eb;padding:16px 40px;text-align:center;">
            <p style="margin:0;font-size:12px;color:#9ca3af;">
              📧 <a href="mailto:{{ $setting->email }}" style="color:#135f99;text-decoration:none;">{{ $setting->email }}</a>
              @if($setting->phone)
               &nbsp;|&nbsp; 📞 {{ $setting->phone }}
              @endif
            </p>
          </td>
        </tr>

        {{-- Footer --}}
        <tr>
          <td style="background-color:#f3f4f6;padding:16px 40px;text-align:center;border-top:1px solid #e5e7eb;">
            <p style="margin:0;font-size:11px;color:#9ca3af;line-height:1.8;">
              Este correo fue generado automáticamente. Por favor no respondas a este mensaje.<br>
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
