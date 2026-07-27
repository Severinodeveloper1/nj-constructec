<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>
</head>
<body style="margin:0;padding:0;background-color:#f3f4f6;font-family:'Segoe UI',Arial,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f3f4f6;padding:32px 16px;">
  <tr>
    <td align="center">
      <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background-color:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08);">

        {{-- Header --}}
        <tr>
          <td style="background:linear-gradient(135deg,#135f99 0%,#0d4a7a 100%);padding:32px 40px;text-align:center;">
            <p style="margin:0 0 4px 0;font-size:22px;font-weight:700;color:#ffffff;letter-spacing:1px;">NJ CONSTRUCTEC</p>
            <p style="margin:0;font-size:12px;color:rgba(255,255,255,0.75);letter-spacing:2px;text-transform:uppercase;">Ingeniería & Construcción</p>
            <div style="margin:20px auto 0 auto;background-color:#fcae45;display:inline-block;padding:6px 20px;border-radius:20px;">
              <p style="margin:0;font-size:11px;font-weight:700;color:#6e4400;text-transform:uppercase;letter-spacing:1px;">📩 Nuevo Mensaje de Contacto</p>
            </div>
          </td>
        </tr>

        {{-- Body --}}
        <tr>
          <td style="padding:36px 40px 28px 40px;">
            <p style="margin:0 0 20px 0;font-size:15px;color:#374151;line-height:1.7;">
              Se ha recibido una nueva consulta técnica a través del formulario de contacto del sitio web. A continuación los detalles del mensaje:
            </p>

            {{-- Info Cards --}}
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:24px;">
              <tr>
                <td style="padding:12px 16px;background-color:#eff6ff;border-left:4px solid #135f99;border-radius:0 6px 6px 0;margin-bottom:8px;">
                  <p style="margin:0 0 2px 0;font-size:11px;color:#6b7280;text-transform:uppercase;letter-spacing:0.5px;font-weight:600;">Nombre Completo</p>
                  <p style="margin:0;font-size:15px;color:#111827;font-weight:600;">{{ $contact->full_name }}</p>
                </td>
              </tr>
            </table>

            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:8px;">
              <tr>
                <td width="48%" style="padding:12px 16px;background-color:#f9fafb;border:1px solid #e5e7eb;border-radius:6px;vertical-align:top;">
                  <p style="margin:0 0 2px 0;font-size:11px;color:#6b7280;text-transform:uppercase;letter-spacing:0.5px;font-weight:600;">Correo Electrónico</p>
                  <p style="margin:0;font-size:14px;color:#135f99;font-weight:500;">{{ $contact->email }}</p>
                </td>
                <td width="4%"></td>
                <td width="48%" style="padding:12px 16px;background-color:#f9fafb;border:1px solid #e5e7eb;border-radius:6px;vertical-align:top;">
                  <p style="margin:0 0 2px 0;font-size:11px;color:#6b7280;text-transform:uppercase;letter-spacing:0.5px;font-weight:600;">Teléfono / Celular</p>
                  <p style="margin:0;font-size:14px;color:#111827;font-weight:500;">{{ $contact->phone ?? '—' }}</p>
                </td>
              </tr>
            </table>

            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:8px;margin-bottom:16px;">
              <tr>
                <td style="padding:12px 16px;background-color:#f9fafb;border:1px solid #e5e7eb;border-radius:6px;">
                  <p style="margin:0 0 2px 0;font-size:11px;color:#6b7280;text-transform:uppercase;letter-spacing:0.5px;font-weight:600;">Asunto</p>
                  <p style="margin:0;font-size:14px;color:#111827;font-weight:600;">{{ $contact->subject }}</p>
                </td>
              </tr>
            </table>

            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td style="padding:16px;background-color:#f9fafb;border:1px solid #e5e7eb;border-radius:6px;">
                  <p style="margin:0 0 8px 0;font-size:11px;color:#6b7280;text-transform:uppercase;letter-spacing:0.5px;font-weight:600;">Mensaje</p>
                  <p style="margin:0;font-size:14px;color:#374151;line-height:1.7;white-space:pre-line;">{{ $contact->message }}</p>
                </td>
              </tr>
            </table>

            {{-- CTA --}}
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:28px;">
              <tr>
                <td style="background-color:#fffbeb;border:1px solid #fde68a;border-radius:8px;padding:16px;">
                  <p style="margin:0;font-size:13px;color:#92400e;line-height:1.6;">
                    💡 <strong>Acción requerida:</strong> Ingresa al panel administrativo para gestionar este mensaje y dar seguimiento oportuno.
                  </p>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        {{-- Footer --}}
        <tr>
          <td style="background-color:#f3f4f6;padding:20px 40px;text-align:center;border-top:1px solid #e5e7eb;">
            <p style="margin:0;font-size:11px;color:#9ca3af;line-height:1.8;">
              Este correo fue generado automáticamente por el sistema de NJ CONSTRUCTEC.<br>
              Fecha de recepción: {{ now()->timezone('America/Lima')->format('d/m/Y H:i') }} (hora Lima)
            </p>
          </td>
        </tr>

      </table>
    </td>
  </tr>
</table>

</body>
</html>
