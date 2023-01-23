using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    public class PolicyRoot : Entity, IParsable {
        /// <summary>The policy that controls the idle time out for web sessions for applications.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<ActivityBasedTimeoutPolicy>? ActivityBasedTimeoutPolicies { get; set; }
#nullable restore
#else
        public List<ActivityBasedTimeoutPolicy> ActivityBasedTimeoutPolicies { get; set; }
#endif
        /// <summary>The policy by which consent requests are created and managed for the entire tenant.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.AdminConsentRequestPolicy? AdminConsentRequestPolicy { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.AdminConsentRequestPolicy AdminConsentRequestPolicy { get; set; }
#endif
        /// <summary>The policy configuration of the self-service sign-up experience of external users.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationFlowsPolicy? AuthenticationFlowsPolicy { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationFlowsPolicy AuthenticationFlowsPolicy { get; set; }
#endif
        /// <summary>The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsPolicy? AuthenticationMethodsPolicy { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsPolicy AuthenticationMethodsPolicy { get; set; }
#endif
        /// <summary>The policy that controls Azure AD authorization settings.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.AuthorizationPolicy? AuthorizationPolicy { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.AuthorizationPolicy AuthorizationPolicy { get; set; }
#endif
        /// <summary>The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<ClaimsMappingPolicy>? ClaimsMappingPolicies { get; set; }
#nullable restore
#else
        public List<ClaimsMappingPolicy> ClaimsMappingPolicies { get; set; }
#endif
        /// <summary>The custom rules that define an access scenario.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<ConditionalAccessPolicy>? ConditionalAccessPolicies { get; set; }
#nullable restore
#else
        public List<ConditionalAccessPolicy> ConditionalAccessPolicies { get; set; }
#endif
        /// <summary>The custom rules that define an access scenario when interacting with external Azure AD tenants.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.CrossTenantAccessPolicy? CrossTenantAccessPolicy { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.CrossTenantAccessPolicy CrossTenantAccessPolicy { get; set; }
#endif
        /// <summary>The feature rollout policy associated with a directory object.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<FeatureRolloutPolicy>? FeatureRolloutPolicies { get; set; }
#nullable restore
#else
        public List<FeatureRolloutPolicy> FeatureRolloutPolicies { get; set; }
#endif
        /// <summary>The policy to control Azure AD authentication behavior for federated users.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<HomeRealmDiscoveryPolicy>? HomeRealmDiscoveryPolicies { get; set; }
#nullable restore
#else
        public List<HomeRealmDiscoveryPolicy> HomeRealmDiscoveryPolicies { get; set; }
#endif
        /// <summary>The policy that represents the security defaults that protect against common attacks.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.IdentitySecurityDefaultsEnforcementPolicy? IdentitySecurityDefaultsEnforcementPolicy { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.IdentitySecurityDefaultsEnforcementPolicy IdentitySecurityDefaultsEnforcementPolicy { get; set; }
#endif
        /// <summary>The policy that specifies the conditions under which consent can be granted.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<PermissionGrantPolicy>? PermissionGrantPolicies { get; set; }
#nullable restore
#else
        public List<PermissionGrantPolicy> PermissionGrantPolicies { get; set; }
#endif
        /// <summary>Specifies the various policies associated with scopes and roles.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<UnifiedRoleManagementPolicy>? RoleManagementPolicies { get; set; }
#nullable restore
#else
        public List<UnifiedRoleManagementPolicy> RoleManagementPolicies { get; set; }
#endif
        /// <summary>The assignment of a role management policy to a role definition object.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<UnifiedRoleManagementPolicyAssignment>? RoleManagementPolicyAssignments { get; set; }
#nullable restore
#else
        public List<UnifiedRoleManagementPolicyAssignment> RoleManagementPolicyAssignments { get; set; }
#endif
        /// <summary>The policy that specifies the characteristics of SAML tokens issued by Azure AD.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<TokenIssuancePolicy>? TokenIssuancePolicies { get; set; }
#nullable restore
#else
        public List<TokenIssuancePolicy> TokenIssuancePolicies { get; set; }
#endif
        /// <summary>The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<TokenLifetimePolicy>? TokenLifetimePolicies { get; set; }
#nullable restore
#else
        public List<TokenLifetimePolicy> TokenLifetimePolicies { get; set; }
#endif
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static new PolicyRoot CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new PolicyRoot();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"activityBasedTimeoutPolicies", n => { ActivityBasedTimeoutPolicies = n.GetCollectionOfObjectValues<ActivityBasedTimeoutPolicy>(ActivityBasedTimeoutPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"adminConsentRequestPolicy", n => { AdminConsentRequestPolicy = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AdminConsentRequestPolicy>(GitHubTodoDemo.MicrosoftGraph.Models.AdminConsentRequestPolicy.CreateFromDiscriminatorValue); } },
                {"authenticationFlowsPolicy", n => { AuthenticationFlowsPolicy = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationFlowsPolicy>(GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationFlowsPolicy.CreateFromDiscriminatorValue); } },
                {"authenticationMethodsPolicy", n => { AuthenticationMethodsPolicy = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsPolicy>(GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsPolicy.CreateFromDiscriminatorValue); } },
                {"authorizationPolicy", n => { AuthorizationPolicy = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AuthorizationPolicy>(GitHubTodoDemo.MicrosoftGraph.Models.AuthorizationPolicy.CreateFromDiscriminatorValue); } },
                {"claimsMappingPolicies", n => { ClaimsMappingPolicies = n.GetCollectionOfObjectValues<ClaimsMappingPolicy>(ClaimsMappingPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"conditionalAccessPolicies", n => { ConditionalAccessPolicies = n.GetCollectionOfObjectValues<ConditionalAccessPolicy>(ConditionalAccessPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"crossTenantAccessPolicy", n => { CrossTenantAccessPolicy = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.CrossTenantAccessPolicy>(GitHubTodoDemo.MicrosoftGraph.Models.CrossTenantAccessPolicy.CreateFromDiscriminatorValue); } },
                {"featureRolloutPolicies", n => { FeatureRolloutPolicies = n.GetCollectionOfObjectValues<FeatureRolloutPolicy>(FeatureRolloutPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"homeRealmDiscoveryPolicies", n => { HomeRealmDiscoveryPolicies = n.GetCollectionOfObjectValues<HomeRealmDiscoveryPolicy>(HomeRealmDiscoveryPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"identitySecurityDefaultsEnforcementPolicy", n => { IdentitySecurityDefaultsEnforcementPolicy = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.IdentitySecurityDefaultsEnforcementPolicy>(GitHubTodoDemo.MicrosoftGraph.Models.IdentitySecurityDefaultsEnforcementPolicy.CreateFromDiscriminatorValue); } },
                {"permissionGrantPolicies", n => { PermissionGrantPolicies = n.GetCollectionOfObjectValues<PermissionGrantPolicy>(PermissionGrantPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"roleManagementPolicies", n => { RoleManagementPolicies = n.GetCollectionOfObjectValues<UnifiedRoleManagementPolicy>(UnifiedRoleManagementPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"roleManagementPolicyAssignments", n => { RoleManagementPolicyAssignments = n.GetCollectionOfObjectValues<UnifiedRoleManagementPolicyAssignment>(UnifiedRoleManagementPolicyAssignment.CreateFromDiscriminatorValue)?.ToList(); } },
                {"tokenIssuancePolicies", n => { TokenIssuancePolicies = n.GetCollectionOfObjectValues<TokenIssuancePolicy>(TokenIssuancePolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"tokenLifetimePolicies", n => { TokenLifetimePolicies = n.GetCollectionOfObjectValues<TokenLifetimePolicy>(TokenLifetimePolicy.CreateFromDiscriminatorValue)?.ToList(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteCollectionOfObjectValues<ActivityBasedTimeoutPolicy>("activityBasedTimeoutPolicies", ActivityBasedTimeoutPolicies);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AdminConsentRequestPolicy>("adminConsentRequestPolicy", AdminConsentRequestPolicy);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationFlowsPolicy>("authenticationFlowsPolicy", AuthenticationFlowsPolicy);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsPolicy>("authenticationMethodsPolicy", AuthenticationMethodsPolicy);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AuthorizationPolicy>("authorizationPolicy", AuthorizationPolicy);
            writer.WriteCollectionOfObjectValues<ClaimsMappingPolicy>("claimsMappingPolicies", ClaimsMappingPolicies);
            writer.WriteCollectionOfObjectValues<ConditionalAccessPolicy>("conditionalAccessPolicies", ConditionalAccessPolicies);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.CrossTenantAccessPolicy>("crossTenantAccessPolicy", CrossTenantAccessPolicy);
            writer.WriteCollectionOfObjectValues<FeatureRolloutPolicy>("featureRolloutPolicies", FeatureRolloutPolicies);
            writer.WriteCollectionOfObjectValues<HomeRealmDiscoveryPolicy>("homeRealmDiscoveryPolicies", HomeRealmDiscoveryPolicies);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.IdentitySecurityDefaultsEnforcementPolicy>("identitySecurityDefaultsEnforcementPolicy", IdentitySecurityDefaultsEnforcementPolicy);
            writer.WriteCollectionOfObjectValues<PermissionGrantPolicy>("permissionGrantPolicies", PermissionGrantPolicies);
            writer.WriteCollectionOfObjectValues<UnifiedRoleManagementPolicy>("roleManagementPolicies", RoleManagementPolicies);
            writer.WriteCollectionOfObjectValues<UnifiedRoleManagementPolicyAssignment>("roleManagementPolicyAssignments", RoleManagementPolicyAssignments);
            writer.WriteCollectionOfObjectValues<TokenIssuancePolicy>("tokenIssuancePolicies", TokenIssuancePolicies);
            writer.WriteCollectionOfObjectValues<TokenLifetimePolicy>("tokenLifetimePolicies", TokenLifetimePolicies);
        }
    }
}
