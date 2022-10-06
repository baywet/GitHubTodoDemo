using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    public class PolicyRoot : Entity, IParsable {
        /// <summary>The policy that controls the idle time out for web sessions for applications.</summary>
        public List<ActivityBasedTimeoutPolicy> ActivityBasedTimeoutPolicies { get; set; }
        /// <summary>The policy by which consent requests are created and managed for the entire tenant.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.AdminConsentRequestPolicy AdminConsentRequestPolicy { get; set; }
        /// <summary>The policy configuration of the self-service sign-up experience of external users.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.AuthenticationFlowsPolicy AuthenticationFlowsPolicy { get; set; }
        /// <summary>The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsPolicy AuthenticationMethodsPolicy { get; set; }
        /// <summary>The policy that controls Azure AD authorization settings.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.AuthorizationPolicy AuthorizationPolicy { get; set; }
        /// <summary>The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.</summary>
        public List<ClaimsMappingPolicy> ClaimsMappingPolicies { get; set; }
        /// <summary>The custom rules that define an access scenario.</summary>
        public List<ConditionalAccessPolicy> ConditionalAccessPolicies { get; set; }
        /// <summary>The custom rules that define an access scenario when interacting with external Azure AD tenants.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.CrossTenantAccessPolicy CrossTenantAccessPolicy { get; set; }
        /// <summary>The feature rollout policy associated with a directory object.</summary>
        public List<FeatureRolloutPolicy> FeatureRolloutPolicies { get; set; }
        /// <summary>The policy to control Azure AD authentication behavior for federated users.</summary>
        public List<HomeRealmDiscoveryPolicy> HomeRealmDiscoveryPolicies { get; set; }
        /// <summary>The policy that represents the security defaults that protect against common attacks.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.IdentitySecurityDefaultsEnforcementPolicy IdentitySecurityDefaultsEnforcementPolicy { get; set; }
        /// <summary>The policy that specifies the conditions under which consent can be granted.</summary>
        public List<PermissionGrantPolicy> PermissionGrantPolicies { get; set; }
        /// <summary>Specifies the various policies associated with scopes and roles.</summary>
        public List<UnifiedRoleManagementPolicy> RoleManagementPolicies { get; set; }
        /// <summary>The assignment of a role management policy to a role definition object.</summary>
        public List<UnifiedRoleManagementPolicyAssignment> RoleManagementPolicyAssignments { get; set; }
        /// <summary>The policy that specifies the characteristics of SAML tokens issued by Azure AD.</summary>
        public List<TokenIssuancePolicy> TokenIssuancePolicies { get; set; }
        /// <summary>The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.</summary>
        public List<TokenLifetimePolicy> TokenLifetimePolicies { get; set; }
        /// <summary>
        /// Instantiates a new PolicyRoot and sets the default values.
        /// </summary>
        public PolicyRoot() : base() {
            OdataType = "#microsoft.graph.policyRoot";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
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
                {"adminConsentRequestPolicy", n => { AdminConsentRequestPolicy = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AdminConsentRequestPolicy>(GithubTodoDemo.MicrosoftGraph.Models.AdminConsentRequestPolicy.CreateFromDiscriminatorValue); } },
                {"authenticationFlowsPolicy", n => { AuthenticationFlowsPolicy = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AuthenticationFlowsPolicy>(GithubTodoDemo.MicrosoftGraph.Models.AuthenticationFlowsPolicy.CreateFromDiscriminatorValue); } },
                {"authenticationMethodsPolicy", n => { AuthenticationMethodsPolicy = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsPolicy>(GithubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsPolicy.CreateFromDiscriminatorValue); } },
                {"authorizationPolicy", n => { AuthorizationPolicy = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AuthorizationPolicy>(GithubTodoDemo.MicrosoftGraph.Models.AuthorizationPolicy.CreateFromDiscriminatorValue); } },
                {"claimsMappingPolicies", n => { ClaimsMappingPolicies = n.GetCollectionOfObjectValues<ClaimsMappingPolicy>(ClaimsMappingPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"conditionalAccessPolicies", n => { ConditionalAccessPolicies = n.GetCollectionOfObjectValues<ConditionalAccessPolicy>(ConditionalAccessPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"crossTenantAccessPolicy", n => { CrossTenantAccessPolicy = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.CrossTenantAccessPolicy>(GithubTodoDemo.MicrosoftGraph.Models.CrossTenantAccessPolicy.CreateFromDiscriminatorValue); } },
                {"featureRolloutPolicies", n => { FeatureRolloutPolicies = n.GetCollectionOfObjectValues<FeatureRolloutPolicy>(FeatureRolloutPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"homeRealmDiscoveryPolicies", n => { HomeRealmDiscoveryPolicies = n.GetCollectionOfObjectValues<HomeRealmDiscoveryPolicy>(HomeRealmDiscoveryPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"identitySecurityDefaultsEnforcementPolicy", n => { IdentitySecurityDefaultsEnforcementPolicy = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.IdentitySecurityDefaultsEnforcementPolicy>(GithubTodoDemo.MicrosoftGraph.Models.IdentitySecurityDefaultsEnforcementPolicy.CreateFromDiscriminatorValue); } },
                {"permissionGrantPolicies", n => { PermissionGrantPolicies = n.GetCollectionOfObjectValues<PermissionGrantPolicy>(PermissionGrantPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"roleManagementPolicies", n => { RoleManagementPolicies = n.GetCollectionOfObjectValues<UnifiedRoleManagementPolicy>(UnifiedRoleManagementPolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"roleManagementPolicyAssignments", n => { RoleManagementPolicyAssignments = n.GetCollectionOfObjectValues<UnifiedRoleManagementPolicyAssignment>(UnifiedRoleManagementPolicyAssignment.CreateFromDiscriminatorValue)?.ToList(); } },
                {"tokenIssuancePolicies", n => { TokenIssuancePolicies = n.GetCollectionOfObjectValues<TokenIssuancePolicy>(TokenIssuancePolicy.CreateFromDiscriminatorValue)?.ToList(); } },
                {"tokenLifetimePolicies", n => { TokenLifetimePolicies = n.GetCollectionOfObjectValues<TokenLifetimePolicy>(TokenLifetimePolicy.CreateFromDiscriminatorValue)?.ToList(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteCollectionOfObjectValues<ActivityBasedTimeoutPolicy>("activityBasedTimeoutPolicies", ActivityBasedTimeoutPolicies);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AdminConsentRequestPolicy>("adminConsentRequestPolicy", AdminConsentRequestPolicy);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AuthenticationFlowsPolicy>("authenticationFlowsPolicy", AuthenticationFlowsPolicy);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsPolicy>("authenticationMethodsPolicy", AuthenticationMethodsPolicy);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AuthorizationPolicy>("authorizationPolicy", AuthorizationPolicy);
            writer.WriteCollectionOfObjectValues<ClaimsMappingPolicy>("claimsMappingPolicies", ClaimsMappingPolicies);
            writer.WriteCollectionOfObjectValues<ConditionalAccessPolicy>("conditionalAccessPolicies", ConditionalAccessPolicies);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.CrossTenantAccessPolicy>("crossTenantAccessPolicy", CrossTenantAccessPolicy);
            writer.WriteCollectionOfObjectValues<FeatureRolloutPolicy>("featureRolloutPolicies", FeatureRolloutPolicies);
            writer.WriteCollectionOfObjectValues<HomeRealmDiscoveryPolicy>("homeRealmDiscoveryPolicies", HomeRealmDiscoveryPolicies);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.IdentitySecurityDefaultsEnforcementPolicy>("identitySecurityDefaultsEnforcementPolicy", IdentitySecurityDefaultsEnforcementPolicy);
            writer.WriteCollectionOfObjectValues<PermissionGrantPolicy>("permissionGrantPolicies", PermissionGrantPolicies);
            writer.WriteCollectionOfObjectValues<UnifiedRoleManagementPolicy>("roleManagementPolicies", RoleManagementPolicies);
            writer.WriteCollectionOfObjectValues<UnifiedRoleManagementPolicyAssignment>("roleManagementPolicyAssignments", RoleManagementPolicyAssignments);
            writer.WriteCollectionOfObjectValues<TokenIssuancePolicy>("tokenIssuancePolicies", TokenIssuancePolicies);
            writer.WriteCollectionOfObjectValues<TokenLifetimePolicy>("tokenLifetimePolicies", TokenLifetimePolicies);
        }
    }
}
